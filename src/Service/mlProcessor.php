<?php


namespace App\Service;

use Rubix\ML\Datasets\Labeled;
use Rubix\ML\Datasets\Unlabeled;
use Rubix\ML\Extractors\CSV;
use Rubix\ML\Transformers\NumericStringConverter;
use Rubix\ML\Transformers\OneHotEncoder;
use Rubix\ML\Classifiers\KNearestNeighbors;
use Rubix\ML\PersistentModel;
use Rubix\ML\Classifiers\NaiveBayes;
use Rubix\ML\Persisters\Filesystem;


use Rubix\ML\CrossValidation\Reports\AggregateReport;
use Rubix\ML\CrossValidation\Reports\ConfusionMatrix;
use Rubix\ML\CrossValidation\Reports\MulticlassBreakdown;

class mlProcessor
{
    public function mlpreprocessing($fortest) {
        $training = Labeled::fromIterator(new CSV(
            'build/images/data/labeled_train.csv'))
            ->apply(new NumericStringConverter());


       /* $testing = Unlabeled::fromIterator(new CSV(
            '/home/olivierjoubert/HackathonHighFive/assets/images/data/unlabeled_fakedtest.csv'))
            ->apply(new NumericStringConverter());*/


        $testing = Unlabeled::fromIterator($fortest)
            ->apply(new NumericStringConverter());


        $estimator = new NaiveBayes();

        $estimator->train($training);

        $predictions = $estimator->predict($testing);
        $probabilities = $estimator->proba($testing);

        return $probabilities;
    }

    public function createDATA()
    {
        $csv = array_map('str_getcsv', file('build/images/data/unlabeled_fakedtest.csv'));

        for ($i = 0; $i < 16; $i++) {
            for ($j=0; $j< 10; $j++) {
                $csv[$i][$j] = 'NAN';
            }
        }
        return $csv;



    }





}

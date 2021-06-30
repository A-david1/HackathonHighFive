<?php


namespace App\Service;


use App\Repository\AnswerRepository;

class stat
{
    private $answerRepository;

    public function __construct(AnswerRepository $answerRepository)
    {
        $this->answerRepository = $answerRepository;
    }

    public function statAnswer()
    {
        $statQuestion1Choice1 = count($this->answerRepository->findBy(['question' => 1, 'answer' => 'The human side']));
        $statQuestion1Choice2 = count($this->answerRepository->findBy(['question' => 1, 'answer' => 'Specifications']));
        $statQuestion1Choice3 = count($this->answerRepository->findBy(['question' => 1, 'answer' => 'Technologies']));
        $statQuestion1Choice4 = count($this->answerRepository->findBy(['question' => 1, 'answer' => 'The paycheck']));
        $globalStatQuestion1 = [$statQuestion1Choice1, $statQuestion1Choice2, $statQuestion1Choice3, $statQuestion1Choice4];
        $totalAnswerQuestion1 = array_sum($globalStatQuestion1);
        $tauxQuestion1Choice1 = (intval(($statQuestion1Choice1/$totalAnswerQuestion1) * 100) . "%");
        $tauxQuestion1Choice2 = (intval(($statQuestion1Choice2/$totalAnswerQuestion1) * 100) . "%");
        $tauxQuestion1Choice3 = (intval(($statQuestion1Choice3/$totalAnswerQuestion1) * 100) . "%");
        $tauxQuestion1Choice4 = (intval(($statQuestion1Choice4/$totalAnswerQuestion1) * 100) . "%");

        $statQuestion2Choice1 = count($this->answerRepository->findBy(['question' => 2, 'answer' => 'Yes']));
        $statQuestion2Choice2 = count($this->answerRepository->findBy(['question' => 2, 'answer' => 'No']));
        $statQuestion2Choice3 = count($this->answerRepository->findBy(['question' => 2, 'answer' => 'Maybe']));
        $statQuestion2Choice4 = count($this->answerRepository->findBy(['question' => 2, 'answer' => 'Why not ?']));
        $globalStatQuestion2 = [$statQuestion2Choice1, $statQuestion2Choice2, $statQuestion2Choice3, $statQuestion2Choice4];
        $totalAnswerQuestion2 = array_sum($globalStatQuestion2);
        $tauxQuestion2Choice1 = (intval(($statQuestion2Choice1/$totalAnswerQuestion2) * 100) . "%");
        $tauxQuestion2Choice2 = (intval(($statQuestion2Choice2/$totalAnswerQuestion2) * 100) . "%");
        $tauxQuestion2Choice3 = (intval(($statQuestion2Choice3/$totalAnswerQuestion2) * 100) . "%");
        $tauxQuestion2Choice4 = (intval(($statQuestion2Choice4/$totalAnswerQuestion2) * 100) . "%");

        $statQuestion3Choice1 = count($this->answerRepository->findBy(['question' => 3, 'answer' => 'Persistent']));
        $statQuestion3Choice2 = count($this->answerRepository->findBy(['question' => 3, 'answer' => 'Organized']));
        $statQuestion3Choice3 = count($this->answerRepository->findBy(['question' => 3, 'answer' => 'Creative']));
        $statQuestion3Choice4 = count($this->answerRepository->findBy(['question' => 3, 'answer' => 'Pragmatic']));
        $globalStatQuestion3 = [$statQuestion3Choice1, $statQuestion3Choice2, $statQuestion3Choice3, $statQuestion3Choice4];
        $totalAnswerQuestion3 = array_sum($globalStatQuestion3);
        $tauxQuestion3Choice1 = (intval(($statQuestion3Choice1/$totalAnswerQuestion3) * 100) . "%");
        $tauxQuestion3Choice2 = (intval(($statQuestion3Choice2/$totalAnswerQuestion3) * 100) . "%");
        $tauxQuestion3Choice3 = (intval(($statQuestion3Choice3/$totalAnswerQuestion3) * 100) . "%");
        $tauxQuestion3Choice4 = (intval(($statQuestion3Choice4/$totalAnswerQuestion3) * 100) . "%");

        $statQuestion4Choice1 = count($this->answerRepository->findBy(['question' => 4, 'answer' => 'Linkedin']));
        $statQuestion4Choice2 = count($this->answerRepository->findBy(['question' => 4, 'answer' => 'Facebook']));
        $statQuestion4Choice3 = count($this->answerRepository->findBy(['question' => 4, 'answer' => 'Instagram']));
        $statQuestion4Choice4 = count($this->answerRepository->findBy(['question' => 4, 'answer' => 'Twitter']));
        $globalStatQuestion4 = [$statQuestion4Choice1, $statQuestion4Choice2, $statQuestion4Choice3, $statQuestion4Choice4];
        $totalAnswerQuestion4 = array_sum($globalStatQuestion4);
        $tauxQuestion4Choice1 = (intval(($statQuestion4Choice1/$totalAnswerQuestion4) * 100) . "%");
        $tauxQuestion4Choice2 = (intval(($statQuestion4Choice2/$totalAnswerQuestion4) * 100) . "%");
        $tauxQuestion4Choice3 = (intval(($statQuestion4Choice3/$totalAnswerQuestion4) * 100) . "%");
        $tauxQuestion4Choice4 = (intval(($statQuestion4Choice4/$totalAnswerQuestion4) * 100) . "%");

        $statQuestion5Choice1 = count($this->answerRepository->findBy(['question' => 5, 'answer' => 'Windows']));
        $statQuestion5Choice2 = count($this->answerRepository->findBy(['question' => 5, 'answer' => 'Linux']));
        $statQuestion5Choice3 = count($this->answerRepository->findBy(['question' => 5, 'answer' => 'Mac OS']));
        $statQuestion5Choice4 = count($this->answerRepository->findBy(['question' => 5, 'answer' => 'Paper and pencil']));
        $globalStatQuestion5 = [$statQuestion5Choice1, $statQuestion5Choice2, $statQuestion5Choice3, $statQuestion5Choice4];
        $totalAnswerQuestion5 = array_sum($globalStatQuestion5);
        $tauxQuestion5Choice1 = (intval(($statQuestion5Choice1/$totalAnswerQuestion5) * 100) . "%");
        $tauxQuestion5Choice2 = (intval(($statQuestion5Choice2/$totalAnswerQuestion5) * 100) . "%");
        $tauxQuestion5Choice3 = (intval(($statQuestion5Choice3/$totalAnswerQuestion5) * 100) . "%");
        $tauxQuestion5Choice4 = (intval(($statQuestion5Choice4/$totalAnswerQuestion5) * 100) . "%");

        $statQuestion6Choice1 = count($this->answerRepository->findBy(['question' => 6, 'answer' => 'Half empty']));
        $statQuestion6Choice2 = count($this->answerRepository->findBy(['question' => 6, 'answer' => 'Half full']));
        $statQuestion6Choice3 = count($this->answerRepository->findBy(['question' => 6, 'answer' => '']));
        $statQuestion6Choice4 = count($this->answerRepository->findBy(['question' => 6, 'answer' => '']));
        $globalStatQuestion6 = [$statQuestion6Choice1, $statQuestion6Choice2, $statQuestion6Choice3, $statQuestion6Choice4];
        $totalAnswerQuestion6 = array_sum($globalStatQuestion6);
        $tauxQuestion6Choice1 = (intval(($statQuestion6Choice1/$totalAnswerQuestion6) * 100) . "%");
        $tauxQuestion6Choice2 = (intval(($statQuestion6Choice2/$totalAnswerQuestion6) * 100) . "%");
        $tauxQuestion6Choice3 = (intval(($statQuestion6Choice3/$totalAnswerQuestion6) * 100) . "%");
        $tauxQuestion6Choice4 = (intval(($statQuestion6Choice4/$totalAnswerQuestion6) * 100) . "%");

        $statQuestion7Choice1 = count($this->answerRepository->findBy(['question' => 7, 'answer' => 'K2000']));
        $statQuestion7Choice2 = count($this->answerRepository->findBy(['question' => 7, 'answer' => 'Dolorean']));
        $statQuestion7Choice3 = count($this->answerRepository->findBy(['question' => 7, 'answer' => '']));
        $statQuestion7Choice4 = count($this->answerRepository->findBy(['question' => 7, 'answer' => '']));
        $globalStatQuestion7 = [$statQuestion7Choice1, $statQuestion7Choice2, $statQuestion7Choice3, $statQuestion7Choice4];
        $totalAnswerQuestion7 = array_sum($globalStatQuestion7);
        $tauxQuestion7Choice1 = (intval(($statQuestion7Choice1/$totalAnswerQuestion7) * 100) . "%");
        $tauxQuestion7Choice2 = (intval(($statQuestion7Choice2/$totalAnswerQuestion7) * 100) . "%");
        $tauxQuestion7Choice3 = (intval(($statQuestion7Choice3/$totalAnswerQuestion7) * 100) . "%");
        $tauxQuestion7Choice4 = (intval(($statQuestion7Choice4/$totalAnswerQuestion7) * 100) . "%");

        $statQuestion8Choice1 = count($this->answerRepository->findBy(['question' => 8, 'answer' => 'Nomad']));
        $statQuestion8Choice2 = count($this->answerRepository->findBy(['question' => 8, 'answer' => 'Sedentary']));
        $statQuestion8Choice3 = count($this->answerRepository->findBy(['question' => 8, 'answer' => '']));
        $statQuestion8Choice4 = count($this->answerRepository->findBy(['question' => 8, 'answer' => '']));
        $globalStatQuestion8 = [$statQuestion8Choice1, $statQuestion8Choice2, $statQuestion8Choice3, $statQuestion8Choice4];
        $totalAnswerQuestion8 = array_sum($globalStatQuestion8);
        $tauxQuestion8Choice1 = (intval(($statQuestion8Choice1/$totalAnswerQuestion8) * 100) . "%");
        $tauxQuestion8Choice2 = (intval(($statQuestion8Choice2/$totalAnswerQuestion8) * 100) . "%");
        $tauxQuestion8Choice3 = (intval(($statQuestion8Choice3/$totalAnswerQuestion8) * 100) . "%");
        $tauxQuestion8Choice4 = (intval(($statQuestion8Choice4/$totalAnswerQuestion8) * 100) . "%");

        $statQuestion9Choice1 = count($this->answerRepository->findBy(['question' => 9, 'answer' => 'A duck']));
        $statQuestion9Choice2 = count($this->answerRepository->findBy(['question' => 9, 'answer' => 'A rabbit']));
        $statQuestion9Choice3 = count($this->answerRepository->findBy(['question' => 9, 'answer' => '']));
        $statQuestion9Choice4 = count($this->answerRepository->findBy(['question' => 9, 'answer' => '']));
        $globalStatQuestion9 = [$statQuestion9Choice1, $statQuestion9Choice2, $statQuestion9Choice3, $statQuestion9Choice4];
        $totalAnswerQuestion9 = array_sum($globalStatQuestion9);
        $tauxQuestion9Choice1 = (intval(($statQuestion9Choice1/$totalAnswerQuestion9) * 100) . "%");
        $tauxQuestion9Choice2 = (intval(($statQuestion9Choice2/$totalAnswerQuestion9) * 100) . "%");
        $tauxQuestion9Choice3 = (intval(($statQuestion9Choice3/$totalAnswerQuestion9) * 100) . "%");
        $tauxQuestion9Choice4 = (intval(($statQuestion9Choice4/$totalAnswerQuestion9) * 100) . "%");

        $statQuestion10Choice1 = count($this->answerRepository->findBy(['question' => 10, 'answer' => 'Day worker']));
        $statQuestion10Choice2 = count($this->answerRepository->findBy(['question' => 10, 'answer' => 'Night worker']));
        $statQuestion10Choice3 = count($this->answerRepository->findBy(['question' => 10, 'answer' => '']));
        $statQuestion10Choice4 = count($this->answerRepository->findBy(['question' => 10, 'answer' => '']));
        $globalStatQuestion10 = [$statQuestion10Choice1, $statQuestion10Choice2, $statQuestion10Choice3, $statQuestion10Choice4];
        $totalAnswerQuestion10 = array_sum($globalStatQuestion10);
        $tauxQuestion10Choice1 = (intval(($statQuestion10Choice1/$totalAnswerQuestion10) * 100) . "%");
        $tauxQuestion10Choice2 = (intval(($statQuestion10Choice2/$totalAnswerQuestion10) * 100) . "%");
        $tauxQuestion10Choice3 = (intval(($statQuestion10Choice3/$totalAnswerQuestion10) * 100) . "%");
        $tauxQuestion10Choice4 = (intval(($statQuestion10Choice4/$totalAnswerQuestion10) * 100) . "%");

        $totalAnswer = [
            $totalAnswerQuestion1,
            $totalAnswerQuestion2,
            $totalAnswerQuestion3,
            $totalAnswerQuestion4,
            $totalAnswerQuestion5,
            $totalAnswerQuestion6,
            $totalAnswerQuestion7,
            $totalAnswerQuestion8,
            $totalAnswerQuestion9,
            $totalAnswerQuestion10,
        ];

        $totalStatAnswer = [
            'question1' => [
                $tauxQuestion1Choice1,
                $tauxQuestion1Choice2,
                $tauxQuestion1Choice3,
                $tauxQuestion1Choice4,
            ],
            'question2' => [
                $tauxQuestion2Choice1,
                $tauxQuestion2Choice2,
                $tauxQuestion2Choice3,
                $tauxQuestion2Choice4,
            ],
            'question3' => [
                $tauxQuestion3Choice1,
                $tauxQuestion3Choice2,
                $tauxQuestion3Choice3,
                $tauxQuestion3Choice4,
            ],
            'question4' => [
                $tauxQuestion4Choice1,
                $tauxQuestion4Choice2,
                $tauxQuestion4Choice3,
                $tauxQuestion4Choice4,
            ],
            'question5' => [
                $tauxQuestion5Choice1,
                $tauxQuestion5Choice2,
                $tauxQuestion5Choice3,
                $tauxQuestion5Choice4,
            ],
            'question6' => [
                $tauxQuestion6Choice1,
                $tauxQuestion6Choice2,
                $tauxQuestion6Choice3,
                $tauxQuestion6Choice4,
            ],
            'question7' => [
                $tauxQuestion7Choice1,
                $tauxQuestion7Choice2,
                $tauxQuestion7Choice3,
                $tauxQuestion7Choice4,
            ],
            'question8' => [
                $tauxQuestion8Choice1,
                $tauxQuestion8Choice2,
                $tauxQuestion8Choice3,
                $tauxQuestion8Choice4,
            ],
            'question9' => [
                $tauxQuestion9Choice1,
                $tauxQuestion9Choice2,
                $tauxQuestion9Choice3,
                $tauxQuestion9Choice4,
            ],
            'question10' => [
                $tauxQuestion10Choice1,
                $tauxQuestion10Choice2,
                $tauxQuestion10Choice3,
                $tauxQuestion10Choice4,
            ],
        ];

        return $totalStatAnswer;
    }
}
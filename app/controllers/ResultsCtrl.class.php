<?php
    namespace app\controllers;

    class ResultsCtrl{
        private $records;

        public function action_results(){
            try{
                $this->records = getDB()->select("wynik", [
                        "idwynik",
                        "kwota",
                        "lat",
                        "procent",
                        "rata",
                        "data"
                    ]);
            } catch (\PDOException $e){
                getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
                if (getConf()->debug) getMessages()->addError($e->getMessage());	
            }

            $this->generateView();
        }

        public function generateView(){
            getSmarty()->assign('page_title');

            getSmarty()->assign('credit', $this->records);

            getSmarty()->display('results_view.tpl');
        }
    }
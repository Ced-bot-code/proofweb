<?php
     class Stack{
        public $a, $cabinet = [], $b = 0;

        function isEmpty(){
            return count($this->cabinet) > 0;
        }

        function size(){
            return count($this->cabinet);
        }

        function push($x){
            $this->cabinet[++$this->b] = $x;
        }

        function pop(){
            $this->cabinet[$this->b--] = null;
        }

        function lists(){
            return $this->cabinet > 0 ? $this->cabinet : ['Cabinet is empty'];
        }

        function findItem($x){
            return $this->cabinet[$x];
        }

        function peek(){
            return $this->cabinet[count($this->cabinet)-1];
        }
    }


    class Queue extends Stack{
        public static $CABINET = "NO ITEMS";

        public $elements, $head, $tail;

        function __constructor(){
            $this->elements = [];
            $this->head = 0;
            $this->tail = 0;
        }

        function enqueue($x){
            $this->elements[$this->tail] = $x;
            $this->tail++;
            $this->head++;

        }

        function dequeue(){
            $xt = $this->elements[$this->head];
            unset($this->elements[$this->head]);
            $this->head++;

            return $xt;
        }

        function peek(){
            return $this->elements[$this->head];
        }

        function length(){
            return $this->tail - $this->head;
        }

        function isEmpty(){
            return $this->length === 0;
        }

        function items(){
            return print_r($this->elements);
        }

    }

    class School{
        public $ds;
        private function office($x){
            return sqrt($x);
        }

        public function classroom($k){
            $this->ds = $this->office($k);
        }

        function chair(){
            return $this->ds;
        }
    }

    $fdd = new School();

    $fdd->classroom(2);

    echo $fdd->chair();

    echo "<br>";

    //$fs = new Stack;

    $x = [
        "Pineapple",
        "Papaya"
    ];

    /* foreach($x as $s){
        $fs->push($s);
    }

    $fs->pop();
    
    foreach($fs->lists() as $sdfweteg){
        echo $sdfweteg."<br>";
    }

    echo "<br>".$fs->peek(); */

    $xy = new Queue;

    foreach($x as $gfs){
        $xy->push($gfs);
    }

    $xy->dequeue();

    echo "<br>".$xy->peek();

    foreach($xy->lists() as $fa){
        echo "$fa <br>";
    }
?>

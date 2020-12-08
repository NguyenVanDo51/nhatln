<?php
class Home extends Controller {

    // Index of the home page (localhost/home(/index))
    // login page
    public function index($param1= '', $param2= '', $param3= '') {
        echo "<br>Home Controller";
        // Initialize Test model
        // $test = $this->model('Test');

        // Call function from the model
        // $testData = $test->getTestFunction();

        // $this->view('home/index', ['test' => testData, 'parameters' => [$param1, $param2, $param3]]);
        $this->view('home/index');
    }

    public function products($param1='', $param2='', $param3='') {
        echo "<br>Home products";
        $this->view('home/product');
    }
}

?>
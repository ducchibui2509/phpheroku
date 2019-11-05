<?php

namespace App\Http\Controllers;

use App\Charts\UserChart;
use Illuminate\Http\Request;

class UserDashboardContoller extends Controller
{
    public function index()
    {

        $monthly_interactive_chart = new UserChart();
        $monthly_interactive_chart->title('Monthly Interactive Statistic');

        $monthly_interactive_chart->labels(["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"]);
        $monthly_interactive_chart->dataset('Views', 'line', $this->generateRandomChartData(12,50000, 1000000))->backgroundColor("rgba(105, 0, 132, 0.2)")->color('rgba(200, 99, 132, 0.7)');
        $monthly_interactive_chart->dataset('Ratings', 'line', $this->generateRandomChartData(12,50000, 1000000))->backgroundColor("rgba(0, 137, 132, 0.2)")->color('rgba(0, 10, 130, 0.7)');
        $monthly_interactive_chart->dataset('Comments', 'line', $this->generateRandomChartData(12,50000,1000000))->backgroundColor("rgba(255, 159, 64, 0.2)")->color('rgba(255, 159, 64, 1)');

        $monthly_post = new UserChart();
        $monthly_post->title('Monthly Post');
        $monthly_post->labels(["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"]);
        $monthly_post->dataset('Posts', 'bar', $this->generateRandomChartData(12,10, 100))->backgroundColor("rgba(105, 0, 132, 0.2)")->color('rgba(200, 99, 132, 0.7)');

        return view('user.dashboard',compact('monthly_interactive_chart', 'monthly_post'));
    }

    private function generateRandomChartData($num, $min, $max){
        $result = array();
        for($i=1; $i<=$num; $i++){
           array_push($result, rand($min,$max));
        }

        return $result;

    }
}

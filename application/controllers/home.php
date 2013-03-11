<?php

class Home_Controller extends Base_Controller {

	
	public function action_index()
	{
		return View::make('home.index')->with('grafico','productos');
	}

	public function action_congresos()
	{
		return View::make('home.index')->with('grafico','congresos');
	}

	public function action_consultoria()
	{
		return View::make('home.index')->with('grafico','consultoria');
	}

	public function action_todos()
	{
		return View::make('home.index')->with('grafico','todos');
	}

	public function action_mari()
	{
		return View::make('home.mari')->with('grafico','todos');
	}
	public function action_ema()
	{
		return View::make('home.ema')->with('grafico','todos');
	}


}
<?php

class EvenementsController extends BaseController {
	public function add() {

		return View::make('evenements/form')->with('adding', true);
	}
	public function create() {
		$title = Input::get('title');

		$event = new Evenement();
		$event->title = $title;
		$event->slug = Str::slug($title).'-'.Str::quickRandom(5);
		$event->save();

		return View::make('success')
			->with('message', 'Votre Evenement a bien été créé')
			->with('description', 'Cliquez sur le bouton ci-dessous afin de vous rendre sur sa page.')
			->with('nextText', "Retour")
			->with('nextRoute', "home");
	}
	public function edit($slug) {
		return View::make('evenements/form')->with('adding', true);
	}
	public function update($slug) {
		return View::make('evenements/form')->with('adding', true);
	}

	public function view($slug) {
		$event = Evenement::where('slug', '=', $slug)->first();

		return View::make('evenements/view')->with('event',$event);
	}
}
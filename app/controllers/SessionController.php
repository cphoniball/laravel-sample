 <?php

class SessionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new session... for logging in 
	 *
	 * @return Response
	 */
	public function create()
	{
		if (Auth::check()) return Redirect::to('/admin'); 
		return View::make('sessions.create'); 
	}


	/**
	 * Store a newly created session
	 *
	 * @return mixed Auth object if authorization successful, otherwise string error message
	 */
	public function store()
	{
		if (Auth::attempt(Input::only('email', 'password'))) {
			return Auth::user(); 
		}
		return 'Login Failed'; 
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Auth::logout(); 
		return Redirect::route('sessions.create'); 
	}


}

<?php

class UserController extends BaseController {

  protected $user=null;

  public function __construct(User $user)
  {
    $this->user=$user;
  }

	public function allUsers()
	{
    return Response::json($this->user->allUsers(),200);

	}
  public function getUser($id)
	{
    $user=$this->user->getUser($id);
    if(!$user)
    {
      return Response::json(['response'=>'Usuario no encontrado'],400);
    }
    return Response::json($user,200);
	}
  public function saveUser()
	{
    return Response::json($this->user->saveUser(),200);

	}
  public function updateUser($id)
	{
    $user=$this->user->updateUser($id);
    if(!$user)
    {
      return Response::json(['response'=>'Usuario no encontrado'],400);
    }
    return Response::json($user,200);
	}
  public function deleteUser($id)
	{
    $user= $this->user->deleteUser($id);
    if(!$user)
    {
      return Response::json(['response'=>'Usuario no encontrado'],400);
    }
    return Response::json(['response'=>'Usuario eliminado satisfactoriamente'],200);

	}


}

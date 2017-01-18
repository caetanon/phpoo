<?php
class Users extends Controller
{
  protected function Index(){
    $viewmodel = new UsersModel();
    $this->ReturnView($viewmodel->Index(), true);
  }
}

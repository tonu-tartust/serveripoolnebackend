<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
  public function index()
  {
    $title = 'Users';
    $users = User::all();
    view('users/index', compact('title', 'users'));
  }

  public function view()
  {
    $user = User::find($_GET['id']);
    if ($user) {
      return view('users/view', compact('user'));
    }
    echo 404;
  }

  public function edit()
  {
    $user = User::find($_GET['id']);
    if ($user) {
      return view('users/edit', compact('user'));
    }
    echo 404;
  }

  public function update()
  {
    $user = User::find($_GET['id']);
    if ($user) {
      // name and email are part of the password hash, so changing them requires a new password
      $changed = $user->name !== $_POST['name'] || $user->email !== $_POST['email'];
      if ($changed && !$_POST['password']) {
        return redirect('/admin/users/edit?id=' . $user->id);
      }
      $user->name = $_POST['name'];
      $user->email = $_POST['email'];
      if ($_POST['password']) {
        $user->password = password_hash($_POST['name'] . $_POST['email'] . $_POST['password'] . md5('yolo'), PASSWORD_BCRYPT);
      }
      $user->save();
      return redirect('/admin/users');
    }
    echo 404;
  }

  public function delete()
  {
    $user = User::find($_GET['id']);
    if ($user) {
      $user->delete();
      return redirect('/admin/users');
    }
    echo 404;
  }
}

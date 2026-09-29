<?php

namespace App\Controllers;

class  PublicController
{
  public function  index()
  {
    $title = 'World';
    $posts = [
      [
        'title' => 'Some World title 1',
        'date' => 'January 1, 2021',
        'author' => 'Pets',
        'body' => 'Some World content 1',
      ],
      [
        'title' => 'Some World title 2',
        'date' => 'January 3, 2021',
        'author' => 'Manivald',
        'body' => 'Some World content 2',
      ],
      [
        'title' => 'Some World title 3',
        'date' => 'January 5, 2021',
        'author' => 'Jorss',
        'body' => 'Some World content 3',
      ],
      [
        'title' => 'Some World title 4',
        'date' => 'January 7, 2021',
        'author' => 'Heli Kopter',
        'body' => 'Some World content 4',
      ],
    ];
    view('index', compact('title', 'posts'));
  }


  public function us()
  {
    $title = 'U.S';
    $posts = [
      [
        'title' => 'Some U.S title 1',
        'date' => 'January 1, 2021',
        'author' => 'Pets',
        'body' => 'Some U.S content 1',
      ],
      [
        'title' => 'Some U.S title 2',
        'date' => 'January 3, 2021',
        'author' => 'Manivald',
        'body' => 'Some U.S content 2',
      ],
      [
        'title' => 'Some U.S title 3',
        'date' => 'January 5, 2021',
        'author' => 'Jorss',
        'body' => 'Some U.S content 3',
      ],
      [
        'title' => 'Some U.S title 4',
        'date' => 'January 7, 2021',
        'author' => 'Heli Kopter',
        'body' => 'Some U.S content 4',
      ],
    ];

    view('us', compact('title', 'posts'));
  }
  public function tech()
  {
    $title = 'Tech';
    $posts = [
      [
        'title' => 'Big tech stuff',
        'date' => 'January 6, 2011',
        'author' => 'Bob',
        'body' => 'Big stuff',
      ],
      [
        'title' => 'Some tech title 2',
        'date' => 'January 3, 2021',
        'author' => 'Torbik',
        'body' => 'Some tech content 2',
      ],
      [
        'title' => 'Some Tech title 3',
        'date' => 'January 5, 2021',
        'author' => 'Morss',
        'body' => 'Some tech content 3',
      ],
      [
        'title' => 'Some tech title 4',
        'date' => 'January 7, 2023',
        'author' => 'Paat',
        'body' => 'Some tech content 4',
      ],
    ];

    view('tech', compact('title', 'posts'));
  }

  public function test()
  {
    $db = new App\DB();
  }
}

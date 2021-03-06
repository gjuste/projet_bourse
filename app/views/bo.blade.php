@extends( 'layout' )
@section('title')
Le titre
@endsection
@section('content')
<style type="text/css">*{color: white; }</style>
<h1>Les administrateurs</h1>
<table class="table">
                <thead>
                  <tr>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Supprimer</th>
                    <th>Dégrader</th>
                </thead>
                <tbody>
                <?php
                foreach ($users as $user) {

                  if ($user['role'] === "admin") {
                  ?>
                  <tr>
                      <td><?php echo $user['pseudo'] ?></td>
                      <td><?php echo $user['email'] ?></td>
                    <form action="{{url('/bo/delete')}}" method="POST">
                      <input type="text" name="id" value="<?php echo $user['id'] ?>" hidden>
                      <td><button class="btn btn-secondary" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                    </form>
                  </tr>

                  <?php

                  }
                }
                 ?>
                </tbody>
              </table>

<h1>Les utilisateurs</h1>
<table class="table">
                <thead>
                  <tr>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Supprimer</th>
                    <th>Promouvoir</th>
                    <th>Desactiver</th>
                </thead>
                <tbody>
                <?php
                foreach ($users as $user) {

                  if ($user['role'] === "user") {
                  ?>
                  <tr>
                      <td><?php echo $user['pseudo'] ?></td>
                      <td><?php echo $user['email'] ?></td>
                    <form action="{{url('/bo/delete')}}" method="POST">
                      <input type="text" name="id" value="<?php echo $user['id'] ?>" hidden>
                      <td><button class="btn btn-secondary" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                    </form>

                    <form action="{{url('/bo/upgrade')}}" method="POST">
                    <input type="text" name="id" value="<?php echo $user['id'] ?>" hidden>
                    <td><button type="submit" class="btn btn-primary"><i class="fa fa-diamond" aria-hidden="true"></i></button></td>

                    
                    </form>
                    <form action="{{url('/bo/deactivaded')}}" method="POST">
                      <input type="text" name="id" value="<?php echo $user['id'] ?>" hidden>
                      <td><input type="submit" class="form-check-input"></input></td>
                    </form>
                    
                  </tr>

                  <?php

                  }
                }
                 ?>
                </tbody>
              </table>


@endsection

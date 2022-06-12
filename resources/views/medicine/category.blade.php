<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medicine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Medicines Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Generic Name</th>
        <th>Form</th>
        <th>Restriction Formula</th>
        <th>Forms</th>
        <th>Faskes TK1</th>
        <th>Faskes TK2</th>
        <th>Faskes TK3</th>
        <th>Category ID</th>


      </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->Generic_Name}}</td>
            <td>{{$d->Form}}</td>
            <td>{{$d->Restriction_Formula}}</td>
            <td>{{$d->Forms}}</td>
            <td>{{$d->Faskes_TK1}}</td>
            <td>{{$d->Faskes_TK2}}</td>
            <td>{{$d->Faskes_TK3}}</td>
            <td>{{$d->category_id}}</td>
            <td><img src="{{ asset('img/obat.jpg') }}" width="200" height="200"/></td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
@extends ("layouts.default")

@section ("content")

<div class="jumbotron">
  <div class="container text-center">
    <h1>Home page</h1>      
    <p>Some text that represents "Me"...</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>{{$title}}</h3><br>
  <div class="row">
    <div class="col-sm-6">
      <ul>
        @foreach($students as $student)
          <p>
          <label>ID :</label>{{$student->id}}<br>
          <label>Name:</label> {{$student->name}}<br>
          <label>Email:</label> {{$student->email}}<br>
        </p>

        @endforeach
      </ul>
    </div>
    <div class="col-sm-6"> 
      <table style="border: 1px solid black;">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
        </tr>
        @foreach($students as $student)
        <tr>
          <td>{{$student->id}}</td>
          <td>{{$student->name}}</td>
          <td>{{$student->email}}</td>
        </tr>
        @endforeach
      </table>
    </div>
    
  </div>
</div><br>



@endsection
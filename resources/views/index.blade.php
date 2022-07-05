<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Testing</title>
  </head>
  <body>
    <h1>first page</h1>
    @if(Session::has('Ikram'))
      {{Session::get('Ikram')}}
      @endif
    <p><?php echo $msg?></p>
      <!-- <p>{{$msg}}</p> -->
      @if(2>10)
      <p>20 greater</p>
      @else
      <p>10 greater</p>
      @endif

      @for($i=1;$i<5;$i++)
      <tr>
        <h1>{{$i}}</h1>


      </tr>
      @endfor

      <tr>
        <td>Colum 1</td>
        <td>Colum 2</td>
        <td>Colum 3</td>
      </tr>
      @foreach($table as $key=>$tb)
      <tr "{{$loop->even ?"Success":""}}">
        <td>{{$loop->iteration}}</td>
        @if($loop->even)
        <p>Even</p>
        @else
        <p>10 greater</p>


        <td>{{$tb[0]}}</td>
        <td>{{$tb[1]}}</td>
        <td>{{$tb[2]}}</td>
        @endif
      </tr>

      @endforeach
      


  </body>
</html>

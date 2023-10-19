<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="{{'insert'}}" method="POST">
        @csrf
    <table border="100">
        <tr>
            <td>
                Name
            </td>
            <td><input type="text" name="name"</td>
            
        </tr>
        <tr>
            <td>
                Class
            </td>
            <td><input type="text" name="class"></td>
        </tr>
        <tr>
            <td>
                Age
            </td>
            <td><input type="text" name="age"></td>
        <tr>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
    </form>
    <table>
        <tr>
            <td>
                #
            </td>
        </tr>
        <tr>
            <td>
                Name
            </td>
        </tr>
        <tr>
            <td>
                Class
            </td>
        </tr>
        <tr>
            <td>
                age
            </td>
            <td>
                Action
            </td>
        </tr>
        @if ($table->count() ==0)
        No records found
        @else
            @foreach($table as $rec)
                 <tr>
                    <td>{{$rec->id}}</td>
                    <td>{{$rec->name}}</td>
                    <td>{{$rec->class}}</td>
                    <td>{{$rec->age}}</td>
                    <td colspan="2">Edit| <a href="{{route('delete',$rec->id)}}">Delete</a></td>
                </tr>
            
                @endforeach
        @endif


        
    </table>
    
    </center>
</body>
</html>
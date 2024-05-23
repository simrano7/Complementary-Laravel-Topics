<h1>All category loaded</h1>
<!-- {{$category_data}} -->
{{Session::get("success")}}
<table border="1px">
    <tr>
        <td>Sno</td>
        <td>Name</td>
        <td>Desc</td>
        <td>View</td>
        <td>Delete</td>
    </tr>
    @foreach($category_data as $c_data)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$c_data->category_name}}</td>
        <td>{{$c_data->description}}</td>
        <td>
            <a href="{{route('category.show',$c_data->id)}}">
                <button>View</button>
            </a>
        </td>
        <td>
            <form action="{{route('category.destroy',$c_data->id)}}" method="post">
                @method("delete")
                @csrf
                <button>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
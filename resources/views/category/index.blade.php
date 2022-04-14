<table>
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td><a href="{{ url('/category/'.$category->id.'/edit') }}"> Editar</a></td>
            <td>
                <form action="{{ url('/category/'.$category->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Borrar" onclick="return confirm('¿Desea borrar este registro?')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
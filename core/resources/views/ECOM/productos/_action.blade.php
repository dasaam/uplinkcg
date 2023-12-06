
<a href="{{route('productos.edit',$producto['idproductoapp'])}}" class="btn btn-primary btn-sm">
    <i class="fa fa-edit"></i>
</a>

<form method="POST" action="{{route('productos.destroy',$producto['idproductoapp'])}}" class="d-inline">
    <input type="hidden" name="_method" value="delete">
    <button type="submit" class="btn btn-danger btn-sm delete_doctor">
        <i class="fa fa-trash"></i>
    </button>
</form>

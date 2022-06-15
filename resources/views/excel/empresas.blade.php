<table>
    <thead>
    <tr>
        <th>RUC</th>
        <th>Nombre de Empresa</th>
        <th>Sector de Empresa</th>
        <th>Numero</th>
        <th>Direccion</th>
        <th>Mision</th>
        <th>Vision</th>
    </tr>
    </thead>
    <tbody>
    @foreach($empresas as $empresa)
        <tr>
            <td>
                {{$empresa->ruc_emp}}
            </td>
            <td>
                {{$empresa->nombre_emp}}
            </td>
            <td>
                {{$empresa->sector_emp}}
            </td>
            <td>
                {{$empresa->numero_emp}}
            </td>
            <td>
                {{$empresa->direccion_emp}}
            </td>
            <td>
                {{$empresa->mision_emp}}
            </td>
            <td>
                {{$empresa->vision_emp}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

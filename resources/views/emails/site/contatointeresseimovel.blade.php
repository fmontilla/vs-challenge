@component('mail::message')

    <table>
        @foreach ($campos as $campo => $valor)
            <tr>
                <td>{{ $campo }}</td>
                <td>{{ $valor }}</td>
            </tr>
        @endforeach
    </table>


@endcomponent

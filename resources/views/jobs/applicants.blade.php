<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <table class="table container table-dark table-striped mt-2">
        <thead>
            <tr>
                <th scope="col">User ID</th>
                <th scope="col">Job ID</th>
                <th scope="col">Current Salray</th>
                <th scope="col">Expected Salaray</th>
                <th scope="col">CV</th>
                <th scope="col">Actions</th>
        </thead>
        </tr>
        <tbody>
            @foreach ($job as $data)
                <tr>
                    <td> {{ $data->user_id }} </td>
                    <td> {{ $data->job_id }} </td>
                    <td> {{ $data->current_salary }} </td>
                    <td> {{ $data->expected_salary }} </td>
                    <td> {{ $data->cv }} </td>
                    <td> <a href="{{route('view',[$data->cv])}}">View CV</a></td>
                    {{-- <td><a href="public/cvs/"{{$data->cv}} target="blank"  alt="">Link</a></td> --}}

                </tr>
        </tbody>
        @endforeach
    </table>
</body>

</html>

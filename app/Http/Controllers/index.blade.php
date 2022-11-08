<div class='container'>;
    <div class ='row'>
        <div class='col-md-12'>
            <div class='card'>
                <div class='card-reader'>uzduociu sarasas</div>
                <div class='card-body'>
                    <table class='table'>
                        <thead>
                            <tr>
                                <td> Pavadinimas</td>
                                <td> Aprasymas </td>

                            </tr>
                        </thead>
                        <tbody>
                           @foreach($tasks as $tasks);
                           <tr>
                            <td>{{$tasks->name}}</td>
                            <td>{{$tasks->aprasymas}}</td>
                            <td style ='width:100px;'></td>
                            <a class='btn btn-success' a  href='{{ route ('tasks.edit', $tasks->id}}'>redaguoti</a>
                           </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
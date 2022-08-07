
        <table border = "1" >
            <thead>
            <tr>
                <th>#</th>
                <th>Id</th>
                <th>Name</th>
                <th>program</th>
                <th>College</th>
                <th>Department</th>
                <th>Add by</th>
            </tr>
            </thead>
            
            <tbody>

                @foreach ($regStudTable as $user1)
                    
                    <tr>
                        <td></td>
                        <td>{{ $user1->ID_no }}</td>
                        <td>{{ $user1->name }}</td>
                        <td>Regular</td>
                        <td>{{ $user1->college }}</td>
                        <td>{{ $user1->department }}</td>
                        <td>add_by</td>
                    </tr>

                @endforeach
                @foreach ($extnStudTable as $user)

                    <tr>
                        <td></td>
                        <td>{{ $user->ID_no }}</td>
                        <td>{{ $user->name }}</td>
                        <td>Extension</td>
                        <td>{{ $user->college }}</td>
                        <td>{{ $user->department }}</td>
                        <td>add_by</td>
                    </tr>

                @endforeach

                @foreach ($disStudTable as $user)

                    <tr>
                        <td></td>
                        <td>{{ $user->ID_no }}</td>
                        <td>{{ $user->name }}</td>
                        <td>Distance</td>
                        <td>{{ $user->college }}</td>
                        <td>{{ $user->department }}</td>
                        <td>add_by</td>
                    </tr>
                    
                @endforeach

            
            </tbody>
        </table>

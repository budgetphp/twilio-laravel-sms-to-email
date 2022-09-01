
  <table class="table table-hover table-bordered table-dark">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Issue</th>
                                        <th scope="col">Date</th>
                                         <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

 @foreach($issues as $issue)
                                    <tr>
                                        <td>{{$issue['name']}}</td>
                                        <td>{{$issue['opening_date']}}</td>
                                         <td>{{$issue['status']}}</td>
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>


                           <div class="text-center"> {{ $issues->links() }}</div>
                          
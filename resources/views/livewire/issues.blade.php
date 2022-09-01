<div class="" wire>
 <i class="fas fa-sync float-right mb-5" wire:click="$emit('refreshComponent')" style="cursor: pointer;"></i>
 



<table class="table table-hover table-bordered table-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Issue</th>
            <th scope="col">Date</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
    @if($issues)
        @foreach($issues as $issue)
        <tr>
            <td>{{$issue['name']}}</td>
            <td>{{$issue['opening_date']}}</td>
            <td>{{$issue['status']}}</td>
        </tr>

        @endforeach



        @elseif(!$issues)

<tr >
    <td colspan="5">You have not posted any issues yet.</td>
</tr>
 
        @endif
    </tbody>
</table>
<style> .issues .bg-white {
background-color: #343a40 !important;color:#fff;

}
.issues .border {
    border-color: #454d55 !important;
}

</style>

<div class="text-center issues"> {{ $issues->links() }}</div>

</div>



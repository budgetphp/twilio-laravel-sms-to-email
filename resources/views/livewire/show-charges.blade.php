<div class="" wire>
    <i class="fas fa-sync float-right mb-5" wire:click="$emit('refreshComponent')" style="cursor: pointer;"></i>


<p class="font-size-7 mb-0 pr-xl-15 aos-init aos-animate">Payments</p>

    <table class="table table-hover table-bordered table-dark">
        <thead class="thead-dark">


            <tr>
                <th scope="col">Amount</th>
                <th scope="col">Currency</th>
                <th scope="col">Description</th>
                <th scope="col">Receipt</th>
                <th scope="col">Status</th>
             </tr>
        </thead>
        <tbody>
       @if($charges['data'])
            @foreach($charges["data"] as $key => $charge )

<?php // print_r($charge); ?>


            <tr>
                <td>{{$charge['amount_captured'] / 100}}</td>
           
                <td>{{$charge['currency']}}</td>
            
                <td>{{$charge['description']}}</td>
           
                <td><a href="{{$charge['receipt_url']}}" target="_BLANK">View</a></td>
            
                <td>{{$charge['status']}}</td>
            </tr>

            @endforeach


            @elseif(!$charges['data'])

            <tr >
                <td colspan="5">You do not have any charges yet.</td>
</tr>
            @endif
        </tbody>
    </table>
    <style>
        .issues .bg-white {
            background-color: #343a40 !important;
            color: #fff;

        }

        .issues .border {
            border-color: #454d55 !important;
        }
    </style>

    <div class="text-center issues"> {{ $charges->links() }}</div>

</div>
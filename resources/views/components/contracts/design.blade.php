<script>
    $('#contract').on('shown.bs.modal', function() {
        $('#mustagreeto').trigger('focus')
    })
</script>

<?php
$skillString = request()->route('skill');
$skill = str_replace("-", " ", $skillString);
$skill = ucwords($skill);

$amount = request()->route('amount');
$interval = request()->route('interval');
$interval_count = request()->route('interval_count');
$milestone = request()->route('milestone');
$milestoneMonths =  $milestone - 1;

$pages = $amount / 602;


?>

<!-- Modal -->
<div class="modal fade" id="contract" tabindex="-1" role="dialog" aria-labelledby="contractLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <b class=" text-bali-grey" id="contractLabel">{{$skill}}</b>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;
                </button>
            </div>
            <div class="modal-body">


                <div id="contract" class="">
                    <div id="outputPage">
                        <div data-exp="simple2" class="outputVersion1 template_SERVAG templated">
                            <div style="">

                                <p style="text-align:Left;"><strong>THIS GENERAL SERVICE AGREEMENT (the "Agreement") is dated this {{ \Carbon\Carbon::now()->format('jS')}} day of {{ \Carbon\Carbon::now()->format('F')}}, {{ \Carbon\Carbon::now()->format('Y')}}.</strong>
                                </p>
                                <div class="partiesContainer">
                                    <div class="parties">
                                        <div class="single">
                                            <b>
                                                Client
                                            </b>
                                            <div class="detail">
                                                <span class="name">Purchaser, Customer
                                            </div><span class="titleSentence">(the "Client")
                                        </div>
                                        <div class="single mt-5 mb-5">
                                            <b>
                                                Contractor
                                            </b>
                                            <div class="detail ">
                                                <span class="name">Budgetphp LLC
                                            </div><span class="titleSentence">(the "Contractor")
                                        </div>
                                    </div>
                                </div>
                                <ol start="1" class=" recital" style="list-style:upper-alpha;">
                                    <li class="lhl" style="text-align:Left;">BACKGROUND
                                    </li>
                                    <li style="margin-bottom:18.0pt;" value="1">The Client is of the opinion that the Contractor has the necessary qualifications, experience and abilities to provide services to the Client.
                                    </li>
                                    <li style="margin-bottom:0.0pt;" value="2">The Contractor is agreeable to providing such services to the Client on the terms and conditions set out in this Agreement.
                                    </li>
                                </ol>
                                <div class=" body">
                                    <p style="text-align:Left;" class="opening"><strong>IN CONSIDERATION OF</strong> the matters described above and of the mutual benefits and obligations set forth in this Agreement, the receipt and sufficiency of which consideration is hereby acknowledged, the Client and the Contractor (individually the "Party" and collectively the "Parties" to this Agreement) agree as follows:
                                    </p>
                                    <ol start="1" style="margin-left:0px;">
                                        <li class="lh" style="text-align:Left;"><strong><u>Services Provided</u></strong><strong><u> </u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="1">The Client hereby agrees to engage the Contractor to provide the Client with the following services (the "Services"):
                                            <ul style="margin-left:5.0pt;margin-top:-1.0pt;">
                                                <li value="1">{{$skill}}
                                                </li>
                                                <li value="1">Up to {{(int)$pages }} Laravel Routes/Dynamic-Pages

                                                </li>
                                                <li value="1">SVG Logo or SVG Logo Retrace

                                                </li>
                                                <li value="1">1 Year Free Remote Backup & Warranty Starting on {{ \Carbon\Carbon::now()->addMonths($milestoneMonths)->format('Y-m-d')}} and ending on {{ \Carbon\Carbon::now()->addYears(1)->addMonths($milestoneMonths)->format('Y-m-d')}}

                                                </li>
                                            </ul>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="2">The Services may also include other service related tasks which the Parties may agree on. The Contractor hereby agrees to provide such Services to the Client.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Term of</u></strong><strong><u> </u></strong><strong><u>Agreement</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="3">The term of this Agreement (the "Term") will begin on {{ \Carbon\Carbon::now()->format('Y-m-d')}} and will remain in full force and effect until {{ \Carbon\Carbon::now()->addYears(1)->addMonths($milestoneMonths)->format('Y-m-d')}}, subject to earlier termination as provided in this Agreement. The Term may be extended with the written consent of the Parties.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Performance</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="4"> The Parties agree to do everything necessary to ensure that the terms of this Agreement take effect. The "Customer" may not cancel, chargeback or acquire refund of any of the scheduled milestone payments paid or unpaid unless specifically agreed to by the "Contractor". If either the "Client" or "Contractor" cuase any delay in delivery of the "Service Agreement" then the delivery schedule may be adjusted or delayed some months as nessasary but the milestone payment plan may not be interupted.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Currency</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="5"> Except as otherwise provided in this Agreement, all monetary amounts referred to in this Agreement are in {{currency()->getUserCurrency()}} .
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Compensation</u></strong><strong><u></u></strong>
                                        </li>

                                        <?php $x = 2;
                                        $x1 = 1;

                                        //   echo $amount;
                                        $amountx = $amount / $milestone;

                                        ?>
                                        <li style="margin-bottom:18.0pt;" value="6">The Contractor will charge the Client for the Services at the rate of {{ currency($amountx, 'USD', currency()->getUserCurrency()) }} per month (the "Compensation") until on or about {{ \Carbon\Carbon::now()->addMonths($milestoneMonths)->addDays(1)->format('Y-m-d')}}.


                                            <table class="table table-hover table-bordered table-light text-center">
                                                <thead class="thead-light">
                                                    <tr>

                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Payment Date</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Milestone #</th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    <td>{{ currency($amountx, 'USD', currency()->getUserCurrency()) }}</td>
                                                    <td>Today</td>
                                                    <td>Build</td>
                                                    <td>Milestone 1 </td>
                                                    @while($x <= $milestone) <tr>

                                                        <td>{{ currency($amountx, 'USD', currency()->getUserCurrency()) }}</td>
                                                        <td>{{ \Carbon\Carbon::now()->addMonths($x1++)->format('Y-m-d')}}</td>
                                                        <td><?php if ($x == $milestone) {
                                                                echo 'Delivery';
                                                            } else {
                                                                echo 'Build';
                                                            } ?> </td>

                                                        <td>Milestone {{ $x++ }}</td>
                                                        </tr>


                                                        @endwhile







                                                </tbody>
                                            </table>


                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="7">A payment of {{ currency($amountx, 'USD', currency()->getUserCurrency()) }} (the "First Milestone") is payable by the Client upon execution of this Agreement.
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="8">For the remaining amount, the Contractor will invoice or charge the card on file for the Client monthly until {{ \Carbon\Carbon::now()->addMonths($milestoneMonths)->addDays(1)->format('Y-m-d')}} delivery.
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="9">Invoices submitted by the Contractor to the Client are due upon receipt and if paying by credit card will be charged automaticly.
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="10">The Contractor will not be reimbursed for any expenses incurred in connection with providing the Services of this Agreement.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Confidentiality</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="11">Confidential information (the "Confidential Information") refers to any data or information relating to the business of the Client which would reasonably be considered to be proprietary to the Client including, but not limited to, accounting records, business processes, and client records and that is not generally known in the industry of the Client and where the release of that Confidential Information could reasonably be expected to cause harm to the Client.
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="12">The Contractor agrees that they will not disclose, divulge, reveal, report or use, for any purpose, any Confidential Information which the Contractor has obtained, except as authorized by the Client or as required by law. The obligations of confidentiality will apply during the Term and will survive indefinitely upon termination of this Agreement.
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="13">All written and oral information and material disclosed or provided by the Client to the Contractor under this Agreement is Confidential Information regardless of whether it was provided before or after the date of this Agreement or how it was provided to the Contractor.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Ownership of Intellectual Property</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="14">All intellectual property and related material, including any trade secrets, moral rights, goodwill, relevant registrations or applications for registration, and rights in any patent, copyright, trademark, trade dress, industrial design and trade name (the "Intellectual Property") that is developed or produced under this Agreement, is a "work made for hire" and will be the sole property of the Client. The use of the Intellectual Property by the Client will not be restricted in any manner. Some stock imagery, code and other materials produced by the "Contractor" may contain single domain use licences.
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="15">The Contractor may not use the Intellectual Property for any purpose other than that contracted for in this Agreement except with the written consent of the Client. The Contractor will not be responsible for any and all damages resulting from the unauthorized use of the Intellectual Property.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Return of Property</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="16">Upon the expiration or termination of this Agreement, the Contractor will return to the Client or destroy any property, documentation, records, or Confidential Information which is the property of the Client.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Capacity/Independent Contractor</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="17">In providing the Services under this Agreement it is expressly agreed that the Contractor is acting as an independent contractor and not as an employee. The Contractor and the Client acknowledge that this Agreement does not create a partnership or joint venture between them, and is exclusively a contract for service. The Client is not required to pay, or make any contributions to, any social security, local, state or federal tax, unemployment compensation, workers' compensation, insurance premium, profit-sharing, pension or any other employee benefit for the Contractor during the Term. The Contractor is responsible for paying, and complying with reporting requirements for, all local, state and federal taxes related to payments made to the Contractor under this Agreement.
                                        </li>
                                        <li class="lhl" style="text-align:Left;">Right of Substitution
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="18">Except as otherwise provided in this Agreement, the Contractor may, at the Contractor's absolute discretion, engage a third party sub-contractor to perform some or all of the obligations of the Contractor under this Agreement and the Client will not hire or engage any third parties to assist with the provision of the Services.
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="19">In the event that the Contractor hires a sub-contractor:
                                            <ul style="margin-left:5.0pt;margin-top:-1.0pt;">
                                                <li style="margin-bottom:18.0pt;" value="1">the Contractor will pay the sub-contractor for its services.
                                                </li>
                                                <li style="margin-bottom:0.0pt;" value="2">for the purposes of the indemnification clause of this Agreement, the sub-contractor is an agent of the Contractor.
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="lhl" style="text-align:Left;">Autonomy
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="20">Except as otherwise provided in this Agreement, the Contractor will have full control over working time, methods, and decision making in relation to provision of the Services in accordance with the Agreement. The Contractor will work autonomously and with the direction of the Client. However, the Client will be responsive to the reasonable needs and concerns of the Contractor.
                                        </li>
                                        <li class="lhl" style="text-align:Left;">Commercial Third Party Software & Client Materials
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="21">Except as otherwise provided in this Agreement, the Client will provide at the Client's own expense, any and all commercial software, special images, data, content, supplies, services and any other items or parts necessary to deliver the Services in accordance with the Agreement.
                                        </li>
                                        <li class="lhl" style="text-align:Left;">No Exclusivity
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="22">The Parties acknowledge that this Agreement is non-exclusive and that either Party will be free, during and after the Term, to engage or contract with third parties for the provision of services similar to the Services.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Notice</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="23">All notices, requests, demands or other communications required or permitted by the terms of this Agreement will be given in writing and delivered to the Parties at the following email addresses:
                                            <ul style="margin-left:5.0pt;margin-top:-1.0pt;">
                                                <li style="margin-bottom:18.0pt;" value="1">Purchaser's Email
                                                </li>
                                                <li style="margin-bottom:0.0pt;" value="2">Budgetphp LLC info@budgetphp.com
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Indemnification</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="24">Except to the extent paid in settlement from any applicable insurance policies, and to the extent permitted by applicable law, each Party agrees to indemnify and hold harmless the other Party, and its respective directors, shareholders, affiliates, officers, agents, employees, and permitted successors and assigns against any and all claims, losses, damages, liabilities, penalties, punitive damages, expenses, reasonable legal fees and costs of any kind or amount whatsoever, which result from or arise out of any act or omission of the indemnifying party, its respective directors, shareholders, affiliates, officers, agents, employees, and permitted successors and assigns that occurs in connection with this Agreement. This indemnification will survive the termination of this Agreement.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Modification of</u></strong><strong><u> </u></strong><strong><u>Agreement</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="25">Any amendment or modification of this Agreement or additional obligation assumed by either Party in connection with this Agreement will only be binding if evidenced in writing signed by each Party or an authorized representative of each Party.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Time of the Essence</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="26">Time is of the essence in this Agreement. No extension or variation of this Agreement will operate as a waiver of this provision.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Assignment</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="27">The Contractor will not voluntarily, or by operation of law, assign or otherwise transfer its obligations under this Agreement without the prior written consent of the Client.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Entire Agreement</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="28">It is agreed that there is no representation, warranty, collateral agreement or condition affecting this Agreement except as expressly provided in this Agreement.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Enurement</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="29">This Agreement will enure to the benefit of and be binding on the Parties and their respective heirs, executors, administrators and permitted successors and assigns.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Titles/Headings</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="30">Headings are inserted for the convenience of the Parties only and are not to be considered when interpreting this Agreement.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Gender</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="31">Words in the singular mean and include the plural and vice versa. Words in the masculine mean and include the feminine and vice versa.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Governing Law</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="32">This Agreement will be governed by and construed in accordance with the laws of the Commonwealth of Pennsylvania.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Severability</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:18.0pt;" value="33">In the event that any of the provisions of this Agreement are held to be invalid or unenforceable in whole or in part, all other provisions will nevertheless continue to be valid and enforceable with the invalid or unenforceable parts severed from the remainder of this Agreement.
                                        </li>
                                        <li class="lh" style="text-align:Left;"><strong><u>Waiver</u></strong><strong><u></u></strong>
                                        </li>
                                        <li style="margin-bottom:0.0pt;" value="34">The waiver by either Party of a breach, default, delay or omission of any of the provisions of this Agreement by the other Party will not be construed as a waiver of any subsequent breach of the same or other provisions.
                                        </li>
                                    </ol>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-blue-3 h-55 rounded-4 " data-dismiss="modal">Close</button>
                    <span class="content text-center mt-5 small">Service Agreement ©2022 BudgetPHP.com®

                </div>
            </div>
        </div>
    </div>
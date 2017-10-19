<!DOCTYPE html>
<p lang="en">
<head>
    <meta charset="UTF-8">
    <title>Room Rental Agreement</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="rental">
    <h2><center>ROOM RENTAL AGREEMENT</center></h2>
    <p>
        This is a legally binding agreement. It is intended to promote household harmony by clarifying the
        expectations and responsibilities of the Owner or Principal Tenant (Landlords) and Tenant when they share
        the same home. The term “Landlord” refers to either Owner or Principal Tenant.
        Landlord shall provide a copy of this executed (signed) document to the Tenant, as required by law.
    </p>
    <div>
        <h3>Rental Unit Located at:</h3>
        <a class="address" href="https://maps.google.com/?q={{ urlencode($owner->address_1 . ', ' . $owner->city . ', ' . $owner->state . ', ' . $owner->zip) }}" target="_blank">
            <div class="column size_4">
                <div><b>{{ $owner->address_1 }}</b></div>
                Address
            </div><div class="column size_4">
                <div><b>{{ $owner->city }}</b></div>
                City
            </div><div class="column size_4">
                <div><b>{{ $owner->state }}</b></div>
                State
            </div><div class="column size_4">
                <div><b>{{ $owner->zip }}</b></div>
                Zip-Code
            </div>
        </a>
        <h3>Parties:</h3>
        <div class="parties">
            <div class="column size_2">
                <div><b>{{ $owner->name }}</b></div>
                Owner/Principal Tenant Name
            </div><div class="column size_2">
                <div><b>{{ $renter->name }}</b></div>
                Tenant Name
            </div>
        </div>
    </div>
    <p>
        <h3>Terms</h3>
        <b>Length of Agreement:</b> Month-to-Month<br />
        Either party may cancel or change terms of this agreement upon thirty (30) days WRITTEN notice. The
        notice period may be lengthened or shortened by mutual WRITTEN agreement, but no less than 7 days.
    </p>
    <p>
        <h3>Rent</h3>
        <b>$900 Cash</b>, is payable monthly on the 2nd day of the month, to <b>{{ $owner->name }}</b>.
        Rent does include utilities. Parking is an additional $25 a month. Location of parking is determined by
        the HOA.<br />
        <br />
        As agreed upon, in addition to the already collected $200.00, $350.00 will be added to the rent for the
        first two months in order to satisfy the total security deposit. That adjustment will make the rent for those months
        $1250.00. Failure to make those payments will be a violation of this agreement.<br />
        <br />
        Any violations to this agreement including if tenant chooses to abandon the property before providing a written 30 days
        notice will result in a forfeit of the security deposit.<br />
    </p>
    <p>
        <h3>Deposits</h3>
        Security deposit: $900.00<br />
        <ul>
            <li>Good Faith none refundable payment of $100.00 will be made 10/19/2017</li>
            <li>A Good Faith none refundable deposit of $200.00 will be paid on 10/19/2017</li>
            <li>Once both $100.00 payment and $200.00 deposit are made owner agrees to hold room for tenant till 11/2/2017.</li>
            <li>The good faith deposit of $200 will be used towards security deposit once first months rent has been paid.</li>
            <li>Failure to pay first months rent will result in the forfeit of said deposit.</li>
        </ul>
        The security deposit may be used for the purpose of repairing damage for which the tenant is responsible
        (beyond normal wear and tear), cleaning, or paying unpaid rent or other bills. The landlord and the tenant shall
        conduct a pre-move out inspection of the rental BEFORE the tenant moves out at which time the landlord
        shall inform the tenant of needed repairs and/or cleaning in WRITING. The tenant shall have the right to
        make any repairs identified at the pre-move out inspection at their own expense before the move out date
        without deduction from the security deposit. Within 21 days after the tenant moves out, the landlord shall
        return the deposit to the tenant with accrued interest less any deductions, if any, the landlord is entitled to
        under California Civil Code 1950.5. If any deductions are made, the landlord shall provide the tenant with a
        written itemized statement of expenses and receipts for cleaning or repairs for which deductions were made
        from the deposit.
    </p>
    <p>
        <h3>Privacy</h3>
        As required by law, the landlord may enter the tenant's room only for the following reasons: (a) in case of
        emergency; (b) to make necessary or agreed-upon repairs, decorations, or improvements, supply
        necessary or agreed-upon services, or exhibit the dwelling unit to prospective or actual purchasers,
        mortgagees, tenants, workers, or contractors; (c) when the tenant has abandoned or surrendered the
        premises; or (d) pursuant to court order. The landlord must give the tenant twenty-four (24) hours
        WRITTEN notice of intent to enter and may enter only during normal business hours, excepting by
        necessity, cases (a) and (c) above.
    </p>
    <p class="pagebreak">
        <h3>Common Areas</h3>
        <b>
            Foyer<br />
            Dinning Room<br />
            Kitchen<br />
            Stair Case to bedrooms<br />
            Stair Case to basement<br />
            Laundry area in basement
        </b><br />
        <br />
        Permission by owner must be given to use any other area of the home prior to each and every use.
    </p>
    <p>
        <h3>Household Rules</h3>
        <b>Cleaning:</b> Clean up after yourself in common areas.<br />
        <b>Kitchen use:</b> As needed, Clean up after yourself.<br />
        <b>Refridgerater use:</b> With-in reason, recommend mini fridge for personal items<br />
        <b>Overnight guests:</b>  No more than one night a week with owners permission<br />
        <b>Use of washer, dryer:</b> As needed, full loads only<br />
        <b>Smoking:</b> Cigarettes or cigars are not allowed<br />
        <b>Drug use:</b> Not allowed<br />
        <b>Alcohol use:</b> Within reason<br/>
        <b>Quiet hours:</b> Between 10pm and 9am<br />
        <b>Sharing personal items:</b> Only if pemission is given prior to each use of said item<br />
        <b>Bedroom assignment:</b> Front bedroom above garage<br />
        <b>Pets:</b> One pet (Cat), must remain in assigned bedroom <br />
    </p>
    <p>
        <h3>Conflict Resolution</h3>
        Each housemate will strive to develop mutual cooperation with all other housemates. Should disagreements
        arise, each will try to resolve the dispute in good faith using clear communication. If disputes continue
        thereafter, the housemates agree to the following methods of conflict resolution:<br />
        <b>Decision by Owner</b>
    </p>
    <p>
        <h3>Other Agreements</h3>
        Both landlord and tenant will complete Condition of Rental Property Checklist within three days of the
        move-in, available at: <a href="/rental/condition">debughive.com/rental/condition</a><br />
    </p>
    <p>
        <h3>Megans Law</h3>
        “Pursuant To Section 290.46 of the Penal Code, information about specified registered sex offenders is made
        available to the public via an Internet Web site maintained by the Department of Justice at www.meganslaw.
        ca.gov. Depending on an offender’s criminal history, this information will include either the address at which
        the offender resides or the community of residence and ZIP Code in which they reside.”
    </p>
    <p>
        <h3>Lead-Based Paint Disclosure</h3>
        _________Tenant(s) acknowledge(s) receipt of “Disclosure of Information on Lead-Based Paint or LeadBased
        Paint Hazards” from landlord/agent. (Required for homes built before 1978.) Available online at
        www.dca.ca.gov/publications/landlordbook/lead_disclosure.pdf<br />
        <br />
        _________Tenant(s) acknowledge(s) receipt of the pamphlet Protect Your Family from Lead in Your Home.
        (Required for homes built before 1978.) Landlords may call 1-800-424-LEAD or go to
        www2.epa.gov/sites/production/files/2013-09/documents/lead_in_your_home_brochure_land_b_w_508.
        pdf to obtain a copy of the pamphlet.
    </p>
    <div>
        <h3>This agreement is entered into on this {{ date('dS') }} day of {{ date('F') }}, {{ date('Y') }}</h3>
        <div class="parties">
            <div class="column size_2">
                <div><b>{{ $owner->name }}</b></div>
                Owner/Principal Tenant Name
            </div><div class="column size_2">
                <div><b>{{ $renter->name }}</b></div>
                Tenant Name
            </div>
            <div class="column size_2">
                <div class="signature"></div>
                Owner/Principal Tenant Signature
            </div><div class="column size_2">
                <div class="signature"></div>
                Tenant Signature
            </div>
        </div>
    </div>
</body>
</html>
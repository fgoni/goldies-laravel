@extends('app')

@section('content')
<h2>Game Constants</h2>
<table class='stats table'>
    <tr class='impar'>
        <th class={{$racestyle}} colspan='4'>Account Features</th>
    </tr>
    <tr class='par'>
        <td width='60%'>Race changes</td><td>{{Config::get('constants.race_changes')}} allowed</td>
    </tr>
</table>
<table class='stats'>
    <tr class='impar'>
        <th class={{$racestyle}} colspan='4'>Economics</th>
    </tr>
    <tr class='par'>
        <td width='60%'>Unit Replication Frequency</td><td>{{ Config::get('constants.unit_freq')}} hours</td>
    </tr>
    <tr class='impar'>
        <td>Income Frequency</td><td>{{Config::get('constants.income_freq')}} minutes</td>
    </tr>
</table>
<table class='stats'>
    <tr class='impar'>
        <th class={{$racestyle}} colspan='4'>Combat Technologies</th>
    </tr>
    <tr class='par'>
        <td width='60%'>Siege Modifier</td><td>{{100*Config::get('constants.atk_percent')}}%</td>
    </tr>
    <tr class='impar'>
        <td>Fortification Modifier</td><td>{{100*Config::get('constants.def_percent')}}%</td>
    </tr>
</table>
<table class='stats'>
    <tr class='impar'>
        <th class={{$racestyle}} colspan='4'>Unit Values</th>
    </tr>
    <tr class='par'>
        <td width='25%'>Type</td><td width='25%'>Attack Strength</td><td width='25%'>Defense Strength</td><td width='25%'>Income</td>
    </tr>
    <tr class='impar'>
        <td>Untrained</td><td>{{Config::get('constants.untrained_atk')}}</td><td>{{Config::get('constants.untrained_def')}}</td><td>{{Config::get('constants.untrained_income')}}</td>
    </tr>
    <tr class='par'>
        <td>Berserkers</td><td>{{Config::get('constants.berserker_atk')}}</td><td>{{Config::get('constants.berserker_def')}}</td><td>{{Config::get('constants.berserker_income')}}</td>
    </tr>
    <tr class='impar'>
        <td>Paladins</td><td>{{Config::get('constants.paladin_atk')}}</td><td>{{Config::get('constants.paladin_def')}}</td><td>{{Config::get('constants.paladin_income')}}</td>
    </tr>
    <tr class='par'>
        <td>Merchants</td><td>{{Config::get('constants.merchant_atk')}}</td><td>{{Config::get('constants.merchant_def')}}</td><td>{{Config::get('constants.merchant_income')}}</td>
    </tr>
    <tr class='par'>
        <td>Injured</td><td>{{Config::get('constants.injured_atk')}}</td><td>{{Config::get('constants.injured_def')}}</td><td>{{Config::get('constants.injured_income')}}</td>
    </tr>
</table>
</table>
@endsection

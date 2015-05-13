@extends('app')

@section('content')
<h1>Welcome to Color Nations!</h1>
	<div class='index'>
		<p>In this game, you manage an army from one of the four color tribes, and your aim is to be the strongest leader at the end of the Season.</p>
		<p>To start, choose one of the tribes with a bonus that most suit your playstyle (be it aggresive, defensive or a bit of both), and start building up a sizeable and powerful Nation!</p>
        </div>
        <div><form action="auth/register" name="form_index" method="post">
                <table class="table">
                    <tr>
                        <th class="brown" colspan="4">Choose one of the tribes to join them in battle!</th>
                    </tr>
                    <tr class="brown">
                        <th width="25%">{{ $bonus_rojos }}</th><th width="25%">{{$bonus_verdes}}</th><th width="25%">{{$bonus_azules}}</th><th width="25%">{{$bonus_naranjas}}</th>
                    </tr>
                    <tr>
                        <td class="reds"><input class="button medium red" type="submit" name="reds" value="Reds" /></td>
                        <td class="greens"><input class="button medium green" type="submit" name="greens" value="Greens" /></td>
                        <td class="blues"><input class="button medium blue" type="submit" name="blues" value="Blues" /></td>
                        <td class="oranges"><input class="button medium orange" type="submit" name="oranges" value="Oranges" /></td>
                    </tr>
                </table>
            </form>
        </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Air Traffic Data</div>

                <div class="panel-body">
                    <?php if(!is_null($result) && (isset($result['states']) && count($result['states']) > 0)): ?>
                        <table class="table table-responsive table-striped table-condensed">
                            <thead>
                                <th>icao24</th>
                                <th>Callsign</th>
                                <th>Origin Country</th>
                                <th>Time Position</th>
                                <th>Time Velocity</th>
                                <th>Longitude</th>
                                <th>Latitude</th>
                                <th>Altitude</th>
                                <th>On Ground</th>
                                <th>Velocity</th>
                                <th>Heading</th>
                                <th>Vertical Rate</th>
                                <th>Sensors</th>
                            </thead>
                            <tbody>
                                <?php foreach ($result['states'] as $state):?>
                                    <tr>
                                        <?php 
                                        $i = 0;
                                        foreach ($state as $value):
                                            if(++$i == 14):
                                                break;
                                            endif;
                                        ?>
                                            <td><?php echo $value;?></td>
                                        <?php endforeach;?>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    <?php else:?>
                        No Results Found!!
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
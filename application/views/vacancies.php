<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Vacancies</h1>
    </div>
</div>

<div class="container">
    <section class="row">
        <div class="spb-column-container col-sm-3">
            <div class="clearfix bigText ">
                <p class="border-bottom border-dark">
                    Current<br>
                    Vacancies
                </p>
            </div>
        </div>
        <div class="col-sm-2">

        </div>
        <div class="spb-column-container col-sm-7">
            <?php foreach($jobs->result_array() as $job): ?>
            <div class="media pb-5">
            <img class="align-self-start mr-3" src="<?=base_url('images/icon.png')?>" alt="Generic placeholder image">
                <div class="media-body">
                    <h5 class="mt-0"><?=$job['job_name'];?></h5>
                    <p><?=$job['job_desc'];?></p>
                    <p>Till: <?=date('d M Y', $job['job_end']);?></p>

                </div>
            </div>
            <?php endforeach; ?>
<!--
            <div class="media">
            <img class="align-self-start mr-3" src="<?=base_url('images/icon.png')?>" alt="Generic placeholder image">
            <div class="media-body">
            <h5 class="mt-0">Top-aligned media</h5>
            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
            </div>
-->

        </div>


    </section>

</div>

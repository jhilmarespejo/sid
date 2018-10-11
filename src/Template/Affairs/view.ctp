<div class="board row">

 <!-- <?php pr($affair); ?>  -->
    <div class="col">
        <h3>Regitro de caso:</h3>
        <table class="table table-responsive table-hover">
            <tr>
                <th scope="row">Nombre completo</th>
                <!-- <td><?= $affair->has('nna') ? $this->Html->link($affair->nna->id, ['controller' => 'Nna', 'action' => 'view', $affair->nna->id]) : '' ?></td>  -->
                <td><?= h($affair->nna->nnanames .' '. $affair->nna->nnasurenames) ?></td> 
            </tr>
            <tr>
                <th scope="row">Nombre convencional</th>
                <td><?= h($affair->nna->conventionalName) ?></td> 
            </tr>
            <tr>
                <th scope="row"><?= __('Lugar') ?></th>
                <td><?= h($affair->place) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Distrito') ?></th>
                <td><?= h($affair->district) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Fecha de registro del caso') ?></th>
                <td><?= h($affair->affairDate->format('Y-m-d')) ?></td> 
            </tr>
            <tr>
                <th scope="row"><?= __('Tipología') ?></th>
                <td><?= h($affair->tipology) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Descripción') ?></th>
                <td><?= h($affair->description) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Tipo de Proceso') ?></th>
                <td><?= h($affair->processType) ?></td>
            </tr>
        </table>
    </div>


<!-- <?php pr($affair['files']); ?>  -->
    <div class="col">
        <h3>Registro de documentos por área:</h3>
        <div class="">     

        <ul class="nav nav-pills" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="true">Social</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="psychology-tab" data-toggle="tab" href="#psychology" role="tab" aria-controls="psychology" aria-selected="false">Psicología</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="health-tab" data-toggle="tab" href="#health" role="tab" aria-controls="health" aria-selected="false">Salud</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="legal-tab" data-toggle="tab" href="#legal" role="tab" aria-controls="legal" aria-selected="false">Legal</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="social" role="tabpanel" aria-labelledby="social-tab">
                <?php foreach($affair['files'] as $file ): 
                if($file['category'] == 'DOCUMENTOS AREA SOCIAL') {
                    ?>    
                    <dl>
                        <dt class="align-middle"><?php echo ($file['description']); ?></dt>
                        <dd class="align-middle">
                            <!-- <button data-toggle="modal" data-target="#exampleModal"> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=<?php echo '"#modal'.$file['id'].'"' ?>>
                                    Ver documento
                                </button>
                            </dd>
                        </dl>
                        <div class="modal fade bd-example-modal-lg" id=<?php echo '"modal'.$file['id'].'"' ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  class=''>
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            <?php echo $file['description']; echo '<br/>';
                                            echo "Fecha de registro: ".$file['dateUpdate'];
                                            ?>
                                        </h5>
                                    </div>
                                    <div class="modal-body">
                                        <embed class='col-lg-12 col-md-12 col-sm-12 col-xs-12' height="500" src=<?php echo '"/sid/files/'.$file['location'].$file['fileName'].'"';?> type="application/pdf"></embed >

                                        <!-- <iframe id="iframe1" src=<?php echo '"http://docs.google.com/gview?url=/sid/files/'.$file['location'].$file['fileName'].'&embedded=true"';?> > -->
                                        </iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                    }
                endforeach; ?> 
            </div>
            <div class="tab-pane fade" id="psychology" role="tabpanel" aria-labelledby="psychology-tab">
                <?php foreach($affair['files'] as $file ): 
                if($file['category'] == 'DOCUMENTOS AREA PSICOLOGICA') {
                ?>    
                    <dl>
                        <dt class="align-middle"><?php echo ($file['description']); ?></dt>
                        <dd class="align-middle">
                            <!-- <button data-toggle="modal" data-target="#exampleModal"> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=<?php echo '"#modal'.$file['id'].'"' ?>>
                                    Ver documento
                                </button>
                            </dd>
                        </dl>
                        <div class="modal fade bd-example-modal-lg" id=<?php echo '"modal'.$file['id'].'"' ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  class=''>
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            <?php echo $file['description']; echo '<br/>';
                                            echo "Fecha de registro: ".$file['dateUpdate'];
                                            ?>
                                        </h5>
                                    </div>
                                    <div class="modal-body">
                                        <embed class='col-lg-12 col-md-12 col-sm-12 col-xs-12' height="500" src=<?php echo '"/sid/files/'.$file['location'].$file['fileName'].'"';?> type="application/pdf"></embed >

                                        <!-- <iframe id="iframe1" src=<?php echo '"http://docs.google.com/gview?url=/sid/files/'.$file['location'].$file['fileName'].'&embedded=true"';?> > -->
                                        </iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                    }
                endforeach; ?> 

            </div>
            <div class="tab-pane fade" id="health" role="tabpanel" aria-labelledby="health-tab">
                <?php foreach($affair['files'] as $file ): 
                if($file['category'] == 'DOCUMENTOS AREA SALUD') {
                    ?>    
                    <dl>
                        <dt class="align-middle"><?php echo ($file['description']); ?></dt>
                        <dd class="align-middle">
                            <!-- <button data-toggle="modal" data-target="#exampleModal"> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=<?php echo '"#modal'.$file['id'].'"' ?>>
                                    Ver documento
                                </button>
                            </dd>
                        </dl>
                        <div class="modal fade bd-example-modal-lg" id=<?php echo '"modal'.$file['id'].'"' ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  class=''>
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            <?php echo $file['description']; echo '<br/>';
                                            echo "Fecha de registro: ".$file['dateUpdate'];
                                            ?>
                                        </h5>
                                    </div>
                                    <div class="modal-body">
                                        <embed class='col-lg-12 col-md-12 col-sm-12 col-xs-12' height="500" src=<?php echo '"/sid/files/'.$file['location'].$file['fileName'].'"';?> type="application/pdf"></embed >

                                        <!-- <iframe id="iframe1" src=<?php echo '"http://docs.google.com/gview?url=/sid/files/'.$file['location'].$file['fileName'].'&embedded=true"';?> > -->
                                        </iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                    }
                endforeach; ?> 
            </div>
            <div class="tab-pane fade" id="legal" role="tabpanel" aria-labelledby="legal-tab">
                <?php foreach($affair['files'] as $file ): 
                if($file['category'] == 'DOCUMENTOS AREA SALUD') {
                    ?>    
                    <dl>
                        <dt class="align-middle"><?php echo ($file['description']); ?></dt>
                        <dd class="align-middle">
                            <!-- <button data-toggle="modal" data-target="#exampleModal"> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=<?php echo '"#modal'.$file['id'].'"' ?>>
                                    Ver documento
                                </button>
                            </dd>
                        </dl>
                        <div class="modal fade bd-example-modal-lg" id=<?php echo '"modal'.$file['id'].'"' ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  class=''>
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            <?php echo $file['description']; echo '<br/>';
                                            echo "Fecha de registro: ".$file['dateUpdate'];
                                            ?>
                                        </h5>
                                    </div>
                                    <div class="modal-body">
                                        <embed class='col-lg-12 col-md-12 col-sm-12 col-xs-12' height="500" src=<?php echo '"/sid/files/'.$file['location'].$file['fileName'].'"';?> type="application/pdf"></embed >

                                        <!-- <iframe id="iframe1" src=<?php echo '"http://docs.google.com/gview?url=/sid/files/'.$file['location'].$file['fileName'].'&embedded=true"';?> > -->
                                        </iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                    }
                endforeach; ?> 
            </div>
        </div>


        </div>
    
        <h3>Registro de imágenes</h3>
        <table class="table table-responsive table-hover">
        <?php foreach($affair['files'] as $file ): 
                if($file['category'] == 'IMAGENES') {
        ?>    
            <tr>
                <td class="align-middle"><?php echo ($file['description']); ?></td>
                <td class="align-middle" ><?php echo $this->Html->image('/files/'.$file['location'].$file['fileName'], ['class' => 'col-lg-3 col-md-4 col-sm-6 col-xs-12', 'data-toggle' => 'modal', 'data-target' => '#modal'.$file['id']]); ?> </td>
                <td class="align-middle">
                    
                </td>
            </tr>
            <div class="modal fade" id=<?php echo '"modal'.$file['id'].'"' ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <?php echo $file['description']; echo '<br/>';
                                echo "Fecha de registro: ".$file['dateUpdate'];
                                ?>
                            </h5>
                        </div>
                        <div class="modal-body ">
                            <?php echo $this->Html->image('/files/'.$file['location'].$file['fileName'], ['class' => 'w-100 p-3']); ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
            }
            endforeach; 
        ?>       
        </table>
    </div>



   

</div>




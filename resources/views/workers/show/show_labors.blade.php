<!-- Muestra los documentos adjuntos a este usuario -->
<table class="table " width="100%" cellspacing="0" id="">
                                    <thead class="table-primary text-dark">
                                    <tr>
                                        <th>Categoría</th>
                                        <th>Días</th>
                                        <th>Horas</th>
                                        <th>Horas semana</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ( $worker->workerLabors as $item)
                                                <tr>
                                                    <td>
                                                        {{$item->lab_servicio}}
                                                    </td>
                                                    <td>
                                                        {{$item->lab_dias}} 
                                                    </td>
                                                    <td>
                                                         {{$item->lab_horas}}
                                                    </td>
                                                    <td>
                                                        {{$item->lab_horas_semana}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3" style="text-align:right">Total horas semanales:
                                            
                                            </th>
                                            <th> </th>
                                        </tr>
                                    </tfoot>
                        </table>

                        <script>
                                          
                                        </script> 
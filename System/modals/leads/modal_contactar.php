<!-- Modal para registrar contacto con lead -->
<div class="modal fade" id="modalContactar" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="ti ti-phone me-2"></i>
                    Registrar Contacto
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="formContactar" method="POST" action="acciones/leads/procesar_interaccion.php">
                <input type="hidden" name="accion" value="crear_interaccion">
                <input type="hidden" name="lead_id" id="contacto_lead_id">
                <div class="modal-body">
                    <!-- Información del Lead -->
                    <div class="card bg-light mb-3">
                        <div class="card-body p-3">
                            <h6 class="card-title text-primary mb-2">
                                <i class="ti ti-user me-1"></i>Información del Lead
                            </h6>
                            <div class="row">
                                <div class="col-md-4">
                                    <strong>Contacto:</strong><br>
                                    <span id="contacto_nombre_lead" class="text-muted">-</span>
                                </div>
                                <div class="col-md-4">
                                    <strong>Teléfono:</strong><br>
                                    <span id="contacto_telefono_lead" class="text-muted">-</span>
                                </div>
                                <div class="col-md-4">
                                    <strong>Email:</strong><br>
                                    <span id="contacto_email_lead" class="text-muted">-</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Formulario de Interacción -->
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Tipo de Interacción <span class="text-danger">*</span></label>
                            <select class="form-select" name="tipo_interaccion_id" id="tipo_interaccion_id" required>
                                <option value="">Seleccionar tipo</option>
                                <option value="1">Llamada Telefónica</option>
                                <option value="2">WhatsApp</option>
                                <option value="3">Email</option>
                                <option value="4">Visita Presencial</option>
                                <option value="5">Reunión Virtual</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Usuario Responsable <span class="text-danger">*</span></label>
                            <select class="form-select" name="usuario_id" required>
                                <?php
                                // Obtener usuarios activos
                                $usuarios_sql = "SELECT id, CONCAT(nombre, ' ', apellidos) as nombre_completo 
                                               FROM usuarios 
                                               WHERE activo = 1 
                                               ORDER BY nombre";
                                $usuarios_result = $conn->query($usuarios_sql);
                                while($usuario = $usuarios_result->fetch_assoc()): ?>
                                    <option value="<?php echo $usuario['id']; ?>">
                                        <?php echo $usuario['nombre_completo']; ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="form-label">Asunto <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="asunto" required placeholder="Ej: Primer contacto, Seguimiento, Información adicional">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="form-label">¿Ya se realizó el contacto?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ya_realizado" id="ya_realizado_si" value="1">
                                <label class="form-check-label" for="ya_realizado_si">
                                    Sí, ya contacté
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ya_realizado" id="ya_realizado_no" value="0" checked>
                                <label class="form-check-label" for="ya_realizado_no">
                                    No, programar para después
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Fecha y Hora</label>
                            <input type="datetime-local" class="form-control" name="fecha_programada" id="fecha_programada">
                            <small class="text-muted">Si ya se realizó, indica cuándo. Si es programado, cuándo será.</small>
                        </div>
                    </div>

                    <!-- Campos para contacto realizado -->
                    <div id="campos_realizado" style="display: none;">
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="form-label">Duración (minutos)</label>
                                <input type="number" class="form-control" name="duracion_minutos" min="1" max="300">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Resultado</label>
                                <select class="form-select" name="resultado">
                                    <option value="">Seleccionar resultado</option>
                                    <option value="exitoso">Exitoso</option>
                                    <option value="sin_respuesta">Sin respuesta</option>
                                    <option value="reagendar">Reagendar</option>
                                    <option value="no_interesado">No interesado</option>
                                    <option value="convertido">Convertido</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <label class="form-label">Descripción/Notas <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="descripcion" rows="3" required 
                                  placeholder="Describe el contenido de la conversación, puntos importantes, dudas del prospecto, etc."></textarea>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="requiere_seguimiento" id="requiere_seguimiento" value="1">
                                <label class="form-check-label" for="requiere_seguimiento">
                                    Requiere seguimiento
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6" id="campo_fecha_seguimiento" style="display: none;">
                            <label class="form-label">Fecha de Seguimiento</label>
                            <input type="date" class="form-control" name="fecha_proximo_seguimiento">
                        </div>
                    </div>

                    <div class="mt-3">
                        <label class="form-label">Observaciones Adicionales</label>
                        <textarea class="form-control" name="observaciones" rows="2" 
                                  placeholder="Observaciones adicionales, próximos pasos, etc."></textarea>
                    </div>

                    <!-- Actualización del Lead -->
                    <div class="card bg-warning bg-opacity-10 mt-3">
                        <div class="card-body p-3">
                            <h6 class="card-title text-warning mb-2">
                                <i class="ti ti-refresh me-1"></i>Actualizar Lead
                            </h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Nuevo Estado del Lead</label>
                                    <select class="form-select" name="nuevo_estado_lead_id">
                                        <option value="">No cambiar estado</option>
                                        <option value="2">Contactado</option>
                                        <option value="3">Interesado</option>
                                        <option value="4">Visita Programada</option>
                                        <option value="5">Matriculado</option>
                                        <option value="6">No Interesado</option>
                                        <option value="7">Sin Respuesta</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Nueva Prioridad</label>
                                    <select class="form-select" name="nueva_prioridad">
                                        <option value="">No cambiar prioridad</option>
                                        <option value="baja">Baja</option>
                                        <option value="media">Media</option>
                                        <option value="alta">Alta</option>
                                        <option value="urgente">Urgente</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="form-label">Nuevo Puntaje de Interés (0-100)</label>
                                    <input type="number" class="form-control" name="nuevo_puntaje_interes" min="0" max="100">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Próxima Acción (Fecha)</label>
                                    <input type="date" class="form-control" name="proxima_accion_fecha">
                                </div>
                            </div>
                            <div class="mt-2">
                                <label class="form-label">Descripción Próxima Acción</label>
                                <input type="text" class="form-control" name="proxima_accion_descripcion" 
                                       placeholder="Ej: Enviar información adicional, Programar visita">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="ti ti-check me-1"></i>Registrar Contacto
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Mostrar/ocultar campos según si ya se realizó el contacto
    $('input[name="ya_realizado"]').change(function() {
        if ($(this).val() === '1') {
            $('#campos_realizado').show();
            $('#fecha_programada').attr('required', true);
        } else {
            $('#campos_realizado').hide();
            $('#fecha_programada').attr('required', false);
        }
    });

    // Mostrar/ocultar campo de fecha de seguimiento
    $('#requiere_seguimiento').change(function() {
        if ($(this).is(':checked')) {
            $('#campo_fecha_seguimiento').show();
        } else {
            $('#campo_fecha_seguimiento').hide();
        }
    });

    // Envío del formulario
    $('#formContactar').on('submit', function(e) {
        e.preventDefault();
        
        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    alert('Contacto registrado exitosamente');
                    $('#modalContactar').modal('hide');
                    location.reload();
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function() {
                alert('Error de conexión al registrar el contacto');
            }
        });
    });

    // Limpiar formulario al cerrar modal
    $('#modalContactar').on('hidden.bs.modal', function() {
        $('#formContactar')[0].reset();
        $('#campos_realizado').hide();
        $('#campo_fecha_seguimiento').hide();
    });
});
</script>
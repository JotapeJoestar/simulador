(function (global) {
  const BACK_PHP_BASE = "index_modulo/back_php";

  // Envuelve $.ajax para mantener un unico punto de entrada.
  function ajaxRequest(options) {
    return $.ajax(options);
  }
  // Ejecuta una peticion POST estandar y permite configurar dataType.
  async function ajaxPost({ url, data = {}, dataType }) {
    return $.ajax({
      url,
      type: "POST",
      data,
      ...(dataType ? { dataType } : {})
    });
  }

  // Dispara un POST y devuelve el resultado parseado como JSON.
  async function postAndParseJson(url, data = {}) {
    const response = await ajaxPost({ url, data, dataType: "text" });
    if (typeof response === "string") {
      try {
        return JSON.parse(response);
      } catch (error) {
        console.error(`Error al convertir la respuesta JSON desde ${url}:`, error);
        throw error;
      }
    }
    return response;
  }

  // Guarda en la base la configuracion del nuevo lodo ingresado en el front.
  async function saveNewMud(payload) {
    try {
      await ajaxPost({ url: `${BACK_PHP_BASE}/savenewmud.php`, data: payload });
      return true;
    } catch (error) {
      console.error("Error en saveNewMud:", error);
      return false;
    }
  }
  // Envia el nombre del pozo seleccionado por el usuario.
  async function savePozo(Namepozo) {
    try {
      await ajaxPost({ url: `${BACK_PHP_BASE}/savepozo.php`, data: { Namepozo } });
      return true;
    } catch (error) {
      console.error("Error en savePozo:", error);
      return false;
    }
  }

  // Actualiza en backend los valores asociados a la bomba 1.
  async function saveP1Value(p1) {
    try {
      await ajaxPost({ url: `${BACK_PHP_BASE}/prueba.php`, data: { p1 } });
      return true;
    } catch (error) {
      console.error("Error en saveP1Value:", error);
      return false;
    }
  }

  // Actualiza en backend los valores asociados a la bomba 2.
  async function saveP2Value(p2) {
    try {
      await ajaxPost({ url: `${BACK_PHP_BASE}/prueba.php`, data: { p2 } });
      return true;
    } catch (error) {
      console.error("Error en saveP2Value:", error);
      return false;
    }
  }

  // Llama prueba.php y lo reutiliza en el front.
  async function sendPruebaData(payload = {}) {
    try {
      return await ajaxPost({ url: `${BACK_PHP_BASE}/prueba.php`, data: payload });
    } catch (error) {
      console.error("Error en sendPruebaData:", error);
      return false;
    }
  }

  // Consulta fluid_volume.php y devuelve metricas de volumen/presion.
  async function fetchFluidMetrics(payload = {}) {
    try {
      return await postAndParseJson("consul_tr/fluid_volume.php", payload);
    } catch (error) {
      console.error("Error en fetchFluidMetrics:", error);
      return null;
    }
  }

  // Atajo especifico para obtener metricas usando solo el valor de p1.
  async function fetchFluidVolume(p1) {
    return fetchFluidMetrics({ p1 });
  }

  // Actualiza en la base los valores configurados para la alerta 4.
  async function updateAlert4({ val4, chb4 }) {
    try {
      await ajaxPost({ url: `${BACK_PHP_BASE}/alertupdate.php`, data: { val4, chb4 } });
      return true;
    } catch (error) {
      console.error("Error en updateAlert4:", error);
      return false;
    }
  }

  // Actualiza en la base los valores configurados para la alerta 3.
  async function updateAlert3({ val3, chb3 }) {
    try {
      await ajaxPost({ url: `${BACK_PHP_BASE}/alertupdate.php`, data: { val3, chb3 } });
      return true;
    } catch (error) {
      console.error("Error en updateAlert3:", error);
      return false;
    }
  }

  // Actualiza en la base los valores configurados para la alerta 2.
  async function updateAlert2({ val2, chb2 }) {
    try {
      await ajaxPost({ url: `${BACK_PHP_BASE}/alertupdate.php`, data: { val2, chb2 } });
      return true;
    } catch (error) {
      console.error("Error en updateAlert2:", error);
      return false;
    }
  }

  // Actualiza en la base los valores configurados para la alerta 1.
  async function updateAlert1({ val1, chb1 }) {
    try {
      await ajaxPost({ url: `${BACK_PHP_BASE}/alertupdate.php`, data: { val1, chb1 } });
      return true;
    } catch (error) {
      console.error("Error en updateAlert1:", error);
      return false;
    }
  }

  // Recupera el estado actual de las alarmas para sincronizar el front.
  async function fetchAlarmData() {
    try {
      return await postAndParseJson(`${BACK_PHP_BASE}/alertconsul.php`);
    } catch (error) {
      console.error("Error en fetchAlarmData:", error);
      return null;
    }
  }

  // Envia la bandera de pausa del simulador al backend.
  async function sendPauseData(data) {
    try {
      return await ajaxPost({ url: `${BACK_PHP_BASE}/pause.php`, data });
    } catch (error) {
      console.error("Error en sendPauseData:", error);
      return false;
    }
  }

  // Actualiza la pausa enviando solo el checkbox.
  async function pauseSimulator(Pausecb) {
    return sendPauseData({ Pausecb });
  }

  // Lee los parámetros de velocidad definidos en speedconsul.php.
  async function fetchSpeedConfig() {
    try {
      return await postAndParseJson(`${BACK_PHP_BASE}/speedconsul.php`);
    } catch (error) {
      console.error("Error en fetchSpeedConfig:", error);
      return null;
    }
  }

  // Envia nueva configuracion de velocidades seleccionada en el front.
  async function updateSpeedSettings({ resultSpeed, speedval }) {
    try {
      await ajaxPost({ url: `${BACK_PHP_BASE}/speedupdate.php`, data: { resultSpeed, speedval } });
      return true;
    } catch (error) {
      console.error("Error en updateSpeedSettings:", error);
      return false;
    }
  }

  // Carga del backend el estado de las valvulas principales del BOP.
  async function fetchBopValveStates() {
    try {
      return await postAndParseJson("bopval_tr/bopv1.php");
    } catch (error) {
      console.error("Error en fetchBopValveStates:", error);
      return null;
    }
  }

  // Obtiene el estado de las valvulas del mini BOP.
  async function fetchMiniBopValveStates() {
    try {
      return await postAndParseJson("bop_modulo/bopmini/llamardatamini.php");
    } catch (error) {
      console.error("Error en fetchMiniBopValveStates:", error);
      return null;
    }
  }

  // Consulta la tabla de valvulas de circulacion para refrescar el panel.
  async function fetchCirculationValves() {
    try {
      return await postAndParseJson(`${BACK_PHP_BASE}/circuconsul.php`);
    } catch (error) {
      console.error("Error en fetchCirculationValves:", error);
      return null;
    }
  }

  // Envia cambios individuales de valvulas de circulacion al backend.
  async function updateCirculationValve(payload) {
    try {
      await ajaxPost({ url: `${BACK_PHP_BASE}/valcir.php`, data: payload });
      return true;
    } catch (error) {
      console.error("Error en updateCirculationValve:", error);
      return false;
    }
  }

  // Recupera datos de fecha/graficación desde el módulo de graficas.
  async function fetchFechaData(payload = {}) {
    try {
      return await postAndParseJson("Modulo_graficas/php/fecha.php", payload);
    } catch (error) {
      console.error("Error en fetchFechaData:", error);
      return null;
    }
  }

  // Actualiza la tabla de rolactudatos con las variables de perforacion.
  async function updateRolActuDatos(payload) {
    try {
      await ajaxPost({ url: `${BACK_PHP_BASE}/rolactudatos.php`, data: payload });
      return true;
    } catch (error) {
      console.error("Error en updateRolActuDatos:", error);
      return false;
    }
  }

  global.ajaxRequest = ajaxRequest;
  global.dbServices = {
    ajaxRequest,
    saveNewMud,
    savePozo,
    saveP1Value,
    saveP2Value,
    sendPruebaData,
    fetchFluidMetrics,
    fetchFluidVolume,
    updateAlert4,
    updateAlert3,
    updateAlert2,
    updateAlert1,
    fetchAlarmData,
    sendPauseData,
    pauseSimulator,
    fetchSpeedConfig,
    updateSpeedSettings,
    fetchBopValveStates,
    fetchMiniBopValveStates,
    fetchCirculationValves,
    updateCirculationValve,
    fetchFechaData,
    updateRolActuDatos
  };
})(window);

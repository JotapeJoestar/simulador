const BACK_PHP_BASE = "index_modulo/back_php";

export function ajaxRequest(options) {
  return $.ajax(options);
}
async function ajaxPost({ url, data = {}, dataType }) {
  return $.ajax({
    url,
    type: "POST",
    data,
    ...(dataType ? { dataType } : {})
  });
}

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

export async function saveNewMud(payload) {
  try {
    await ajaxPost({ url: `${BACK_PHP_BASE}/savenewmud.php`, data: payload });
    return true;
  } catch (error) {
    console.error("Error en saveNewMud:", error);
    return false;
  }
}
export async function savePozo(Namepozo) {
  try {
    await ajaxPost({ url: `${BACK_PHP_BASE}/savepozo.php`, data: { Namepozo } });
    return true;
  } catch (error) {
    console.error("Error en savePozo:", error);
    return false;
  }
}

export async function saveP1Value(p1) {
  try {
    await ajaxPost({ url: `${BACK_PHP_BASE}/prueba.php`, data: { p1 } });
    return true;
  } catch (error) {
    console.error("Error en saveP1Value:", error);
    return false;
  }
}

export async function saveP2Value(p2) {
  try {
    await ajaxPost({ url: `${BACK_PHP_BASE}/prueba.php`, data: { p2 } });
    return true;
  } catch (error) {
    console.error("Error en saveP2Value:", error);
    return false;
  }
}

export async function sendPruebaData(payload = {}) {
  try {
    await ajaxPost({ url: `${BACK_PHP_BASE}/prueba.php`, data: payload });
    return true;
  } catch (error) {
    console.error("Error en sendPruebaData:", error);
    return false;
  }
}

export async function fetchFluidMetrics(payload = {}) {
  try {
    return await postAndParseJson("consul_tr/fluid_volume.php", payload);
  } catch (error) {
    console.error("Error en fetchFluidMetrics:", error);
    return null;
  }
}

export async function fetchFluidVolume(p1) {
  return fetchFluidMetrics({ p1 });
}

export async function updateAlert4({ val4, chb4 }) {
  try {
    await ajaxPost({ url: `${BACK_PHP_BASE}/alertupdate.php`, data: { val4, chb4 } });
    return true;
  } catch (error) {
    console.error("Error en updateAlert4:", error);
    return false;
  }
}

export async function updateAlert3({ val3, chb3 }) {
  try {
    await ajaxPost({ url: `${BACK_PHP_BASE}/alertupdate.php`, data: { val3, chb3 } });
    return true;
  } catch (error) {
    console.error("Error en updateAlert3:", error);
    return false;
  }
}

export async function updateAlert2({ val2, chb2 }) {
  try {
    await ajaxPost({ url: `${BACK_PHP_BASE}/alertupdate.php`, data: { val2, chb2 } });
    return true;
  } catch (error) {
    console.error("Error en updateAlert2:", error);
    return false;
  }
}

export async function updateAlert1({ val1, chb1 }) {
  try {
    await ajaxPost({ url: `${BACK_PHP_BASE}/alertupdate.php`, data: { val1, chb1 } });
    return true;
  } catch (error) {
    console.error("Error en updateAlert1:", error);
    return false;
  }
}

export async function fetchAlarmData() {
  try {
    return await postAndParseJson(`${BACK_PHP_BASE}/alertconsul.php`);
  } catch (error) {
    console.error("Error en fetchAlarmData:", error);
    return null;
  }
}

export async function sendPauseData(data) {
  try {
    await ajaxPost({ url: `${BACK_PHP_BASE}/pause.php`, data });
    return true;
  } catch (error) {
    console.error("Error en sendPauseData:", error);
    return false;
  }
}

export async function pauseSimulator(Pausecb) {
  return sendPauseData({ Pausecb });
}

export async function fetchSpeedConfig() {
  try {
    return await postAndParseJson(`${BACK_PHP_BASE}/speedconsul.php`);
  } catch (error) {
    console.error("Error en fetchSpeedConfig:", error);
    return null;
  }
}

export async function updateSpeedSettings({ resultSpeed, speedval }) {
  try {
    await ajaxPost({ url: `${BACK_PHP_BASE}/speedupdate.php`, data: { resultSpeed, speedval } });
    return true;
  } catch (error) {
    console.error("Error en updateSpeedSettings:", error);
    return false;
  }
}

export async function fetchBopValveStates() {
  try {
    return await postAndParseJson("bopval_tr/bopv1.php");
  } catch (error) {
    console.error("Error en fetchBopValveStates:", error);
    return null;
  }
}

export async function fetchMiniBopValveStates() {
  try {
    return await postAndParseJson("bop_modulo/bopmini/llamardatamini.php");
  } catch (error) {
    console.error("Error en fetchMiniBopValveStates:", error);
    return null;
  }
}

export async function fetchCirculationValves() {
  try {
    return await postAndParseJson(`${BACK_PHP_BASE}/circuconsul.php`);
  } catch (error) {
    console.error("Error en fetchCirculationValves:", error);
    return null;
  }
}

export async function updateCirculationValve(payload) {
  try {
    await ajaxPost({ url: `${BACK_PHP_BASE}/valcir.php`, data: payload });
    return true;
  } catch (error) {
    console.error("Error en updateCirculationValve:", error);
    return false;
  }
}

export async function fetchFechaData(payload = {}) {
  try {
    return await postAndParseJson("Modulo_graficas/php/fecha.php", payload);
  } catch (error) {
    console.error("Error en fetchFechaData:", error);
    return null;
  }
}

export async function updateRolActuDatos(payload) {
  try {
    await ajaxPost({ url: `${BACK_PHP_BASE}/rolactudatos.php`, data: payload });
    return true;
  } catch (error) {
    console.error("Error en updateRolActuDatos:", error);
    return false;
  }
}




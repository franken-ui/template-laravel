import axios from "axios";
import "franken-ui/js/core.iife";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

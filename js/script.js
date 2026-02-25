document.addEventListener("DOMContentLoaded", function() {
    const statusText = document.getElementById("vlc-status-text");
    if (!statusText) return;

    /**
     * Fase de Protocolos: Define las actualizaciones secuenciales de estado
     * mostradas durante el ciclo de vida de la terminal.
    */
    const phases = [
        "ESTABLISHING_SECURE_TUNNEL...",
        "ENCRYPTING_DATA_PACKETS...",
        "NODE_SYNC_COMPLETE",
        "LATENCY_OPTIMIZED_0.0012ms",
        "SSL_HANDSHAKE_VERIFIED",
        "SYSTEM_OPERATIONAL_V2.0"
    ];

    let i = 0;

    /**
     * Bucle de Ejecución: Ciclo de fases con intervalo predefinido
     * para mantener la interactividad sin sobrecarga de CPU.
    */
    setInterval(() => {
        // Fade de opacidad para señalar transición de datos.
        statusText.style.opacity = 0;
        
        setTimeout(() => {
            // Actualización del búfer al índice de fase interno.
            statusText.innerText = phases[i];
            statusText.style.opacity = 1;
            i = (i + 1) % phases.length;
        }, 200); // Retraso de 200ms para coincidir con la transición CSS.

    }, 3500); // Ciclo de sincronización cada 3.5 segundos.
});
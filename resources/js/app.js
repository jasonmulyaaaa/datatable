import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

import VueTheMask from 'vue-the-mask'

//Jalankan Inertia jika memang pada app.blade.php terdapat id app
if (document.getElementById('app')) {
    createInertiaApp({
        resolve: name => require(`./Pages/${name}`),
        setup({el, App, props, plugin}) {
            createApp({render: () => h(App, props)})
                .use(plugin)
                .use(VueTheMask)
                .mount(el)
        },
    })
}

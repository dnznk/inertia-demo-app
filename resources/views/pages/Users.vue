<template>
    <Layout>
        <h1 class="text-3xl">
            Users
        </h1>

        <div style="margin-top: 400px">
            <p>The current time is {{ time}}.</p>

            <Link href="/users" class="text-blue-500" preserve-scoll>
                Refresh
            </Link>
        </div>
    </Layout>
</template>

<script>
import Layout from '../shared/Layout.vue'
import {Link} from '@inertiajs/inertia-vue3'

export default {
    components: {Layout, Link},
    props: { time: String }
};
</script>

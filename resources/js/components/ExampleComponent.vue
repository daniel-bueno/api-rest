<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header text-center">Crud de Consulta em API RESTFULL utilizando Laravel</div>

                    <div class="card-body">
                        <input type="text" class="col-md-12" v-model="texto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: () => {
            return {
                texto:''
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

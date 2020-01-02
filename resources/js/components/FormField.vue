<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <select
                :id="field.name"
                class="add-select"
                v-model="value"
            >
              <option v-for="item in responseOptions">
                {{ item[field.attribute] }}
              </option>
            </select>

            <input
                :id="field.name"
                type="text"
                class="w-full form-control form-input form-input-bordered"
                :class="errorClasses"
                :placeholder="'Add new '+field.name"
                v-model="value"
            />
        </template>
    </default-field>
</template>

<style>
.add-select {
    width: 100%;
    margin-bottom: 5px;
    background-color: white;
    height: 36px;
    border-width: 1px;
    border-color: #bacad6;
    border-radius: .5rem;
}
</style>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'
import axios from 'axios';

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field', 'responseOptions'],

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.responseOptions = null;
            Nova.request().get(`/nova-vendor/merotech/appendable-dynamic-dropdown/retrieve?modelName=${this.resourceName}&tableName=${this.field.attribute}`)
            .then((response) => {
              // handle success
              this.responseOptions = response.data;
            })
            .catch((error) => {
              // handle error
              console.log(error);
            })

            this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value || '')
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
            this.value = value
        },
    },
}
</script>

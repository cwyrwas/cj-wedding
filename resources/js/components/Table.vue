<template>
    <section class="container mx-auto p-6 font-sans">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <table-head-cell>
                                Name
                            </table-head-cell>
                            <table-head-cell>
                                Email
                            </table-head-cell>
                            <table-head-cell>
                                Invitation Date
                            </table-head-cell>
                            <table-head-cell>
                                Is Attending
                            </table-head-cell>
                            <table-head-cell>
                                Has Plus One
                            </table-head-cell>
                            <table-head-cell>
                                Is Vegetarian
                            </table-head-cell>
                            <table-head-cell>
                                Address
                            </table-head-cell> 
                        </tr>   
                    </thead>
                    <tbody class="bg-white">
                        <tr v-for="guest in guests" :key="guest.id">
                            <table-row-cell>
                                <a :href="'/guests/' + guest.id" class="text-cj-blue underline">{{ guest.name }}</a>
                            </table-row-cell>
                            <table-row-cell>
                                {{ guest.email }}
                            </table-row-cell>
                            <table-row-cell>
                                {{ formatDate(guest.invitation_sent_at) }}
                            </table-row-cell>
                            <table-row-cell>
                                {{ guest.is_attending ? 'Yes' : 'No' }}
                            </table-row-cell>
                            <table-row-cell>
                                {{ guest.has_plus_one ? 'Yes' : 'No' }}
                            </table-row-cell>
                            <table-row-cell>
                                {{ guest.is_vegetarian ? 'Yes' : 'No' }}
                            </table-row-cell>
                            <table-row-cell>
                                {{ guest.address }}
                            </table-row-cell>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
                
</template>

<script>
import TableHeadCell from './TableHeadCell.vue';
import TableRowCell from './TableRowCell.vue';
import Link from './Link.vue';
export default {
    name: 'Table',
    components: { TableHeadCell, TableRowCell, Link },
    props: {
        guests: {
            type: Array,
            default: []
        }
    },
    methods: {
        formatDate(dateString) {
            const date = new Date(dateString);
            return new Intl.DateTimeFormat('default', {dateStyle: 'long'}).format(date);
        }
    },   
}
</script>

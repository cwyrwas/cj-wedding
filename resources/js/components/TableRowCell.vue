<template>
    <td class="px-4 py-3 border">
        <div class="flex items-center text-sm">
            <div>
                <slot></slot>
            </div>
        </div>
    </td>
</template>
<script>
export default {
    name: 'TableRowCell',
}
</script>
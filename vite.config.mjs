import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import html from '@rollup/plugin-html';
import { glob } from 'glob';

/**
 * Get Files from a directory
 * @param {string} query
 * @returns {array}
 */
function getFilesArray(query) {
    return glob.sync(query);
}

/**
 * Js Files
 */
const pageJsFiles = getFilesArray('resources/assets/js/*.js');
const vendorJsFiles = getFilesArray('resources/assets/vendor/js/*.js');
const libsJsFiles = getFilesArray('resources/assets/vendor/libs/**/*.js');

/**
 * Scss Files
 */
const coreScssFiles = getFilesArray('resources/assets/vendor/scss/**/!(_)*.scss');
const libsScssFiles = getFilesArray('resources/assets/vendor/libs/**/!(_)*.scss');
const libsCssFiles = getFilesArray('resources/assets/vendor/libs/**/*.css');
const fontsScssFiles = getFilesArray('resources/assets/vendor/fonts/!(_)*.scss');

/**
 * Window Assignment for Libs like jKanban, pdfMake
 */
function libsWindowAssignment() {
    return {
        name: 'libsWindowAssignment',
        transform(src, id) {
            if (id.includes('jkanban.js')) {
                return src.replace('this.jKanban', 'window.jKanban');
            } else if (id.includes('vfs_fonts')) {
                return src.replace('this.pdfMake', 'window.pdfMake');
            }
            return src;
        }
    };
}

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/assets/css/demo.css',
                'resources/js/app.js',
                ...pageJsFiles,
                ...vendorJsFiles,
                ...libsJsFiles,
                'resources/js/laravel-user-management.js',
                ...coreScssFiles,
                ...libsScssFiles,
                ...libsCssFiles,
                ...fontsScssFiles
            ],
            refresh: true
        }),
        html(),
        libsWindowAssignment()
    ],
    build: {
        chunkSizeWarningLimit: 16000
    }
});

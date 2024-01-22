<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

namespace local_activityintro;

use core_course\hook\extend_format_module_intro;
use html_writer;

/**
 * Callback for hooks.
 *
 * @package    local_activityintro
 * @copyright  2024 Catalyst IT Australia
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class hook_callbacks {
    /**
     * Extending a course module intro.
     *
     * @param \core_course\hook\extend_format_module_intro $hook
     */
    public static function extend_format_module_intro(extend_format_module_intro $hook): void {
        global $OUTPUT;

        $text = get_string('customintro', 'local_activityintro');
        $html = html_writer::tag('div', $text, ['class' => 'alert alert-info alert-block']);
        $hook->intro = $html . $hook->intro;
    }
}

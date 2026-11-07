<?php

declare(strict_types=1);

namespace Plugins\PlatformTasks\API\Contracts;

/**
 * Published contract for `platform.tasks`.
 *
 * Super-admin task board: tasks, phases and assignment. Platform-scoped, never school-scoped.
 *
 * Legacy source : admin_dash/js/views/task-management.js, admin_dash/ajax/*task*, save_task.php, task_popup.php
 * Legacy tables : A_ELIMU_SA_TASKS, A_ELIMU_SA_TASK_PHASES, task_teachers
 *
 * Consumers declare `"requires": ["platform.tasks"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface PlatformTaskContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}

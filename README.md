# hkm-plugin-platform-tasks

> Solves **`platform.tasks`** · namespace **`Plugins\PlatformTasks\`** · on-demand GDA module
> Family: Elimu / school domain

Super-admin task board: tasks, phases and assignment. Platform-scoped, never school-scoped.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `PlatformTaskContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `admin_dash/js/views/task-management.js, admin_dash/ajax/*task*, save_task.php, task_popup.php` |
| Legacy tables | `A_ELIMU_SA_TASKS, A_ELIMU_SA_TASK_PHASES, task_teachers` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `audit.trail`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["platform.tasks"] }
```

```php
$svc = $container->make(\Plugins\PlatformTasks\API\Contracts\PlatformTaskContract::class);
```

## Installing

```bash
hkm plugins enable PlatformTasks <project>
```

<?php

namespace Junges\TrackableJobs\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphTo;

interface TrackableJobContract
{
    /**
     * Return the model related to the tracked job.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function trackable(): MorphTo;

    /**
     * Mark the job as started.
     *
     * @return bool
     */
    public function markAsStarted(): bool;

    /**
     * Mark the job as finished successfully.
     *
     * @param  string|null  $message
     * @return bool
     */
    public function markAsFinished(string $message = null): bool;

    /**
     * Mark the job as finished with error.
     *
     * @param  string|null  $exception
     * @return bool
     */
    public function markAsFailed(string $exception = null): bool;

    /**
     * Saves the output of the job.
     *
     * @param  string  $output
     * @return bool
     */
    public function setOutput(string $output): bool;
}

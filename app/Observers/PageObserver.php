<?php
namespace App\Observers;

use App\page;

class PageObserver
{
    
    /**
     * Listen to the page creating event.
     *
     * @param  page  $page
     * @return void
     */
    public function creating(page $page)
    {
        //code...
    }

     /**
     * Listen to the page created event.
     *
     * @param  page  $page
     * @return void
     */
    public function created(page $page)
    {
        //code...
    }

    /**
     * Listen to the page updating event.
     *
     * @param  page  $page
     * @return void
     */
    public function updating(page $page)
    {
        //code...
    }

    /**
     * Listen to the page updated event.
     *
     * @param  page  $page
     * @return void
     */
    public function updated(page $page)
    {
        //code...
    }

    /**
     * Listen to the page saving event.
     *
     * @param  page  $page
     * @return void
     */
    public function saving(page $page)
    {
        //code...
    }

    /**
     * Listen to the page saved event.
     *
     * @param  page  $page
     * @return void
     */
    public function saved(page $page)
    {
        //code...
    }

    /**
     * Listen to the page deleting event.
     *
     * @param  page  $page
     * @return void
     */
    public function deleting(page $page)
    {
        //code...
    }

    /**
     * Listen to the page deleted event.
     *
     * @param  page  $page
     * @return void
     */
    public function deleted(page $page)
    {
        //code...
    }

    /**
     * Listen to the page restoring event.
     *
     * @param  page  $page
     * @return void
     */
    public function restoring(page $page)
    {
        //code...
    }

    /**
     * Listen to the page restored event.
     *
     * @param  page  $page
     * @return void
     */
    public function restored(page $page)
    {
        //code...
    }
}
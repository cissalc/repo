public interface RuntimeEngine {


    /**

     * Returns <code>KieSession</code> configured for this <code>RuntimeEngine</code>

     * @return

     */

    KieSession getKieSession();

    

    /**

     * Returns <code>TaskService</code> configured for this <code>RuntimeEngine</code>

     * @return

     */

    TaskService getTaskService();   

}